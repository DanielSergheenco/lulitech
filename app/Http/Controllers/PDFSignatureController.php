<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Storage;

class PDFSignatureController extends Controller
{
    public function generatePDFWithSignature()
    {
        // Load TCPDF configuration
        $config = [
            'signature_title' => 'Digital Signature',
            'signature_title_page' => 'Digital Signature - Page %s',
            'signature_font_size' => 8,
            'signature_image_width' => 25,
            'signature_image_height' => 25,
            'signature_file' => '', // Path to your signature image file
            'signature_coordinates' => [
                'x' => 10,
                'y' => 10,
            ]];

        // Create a new TCPDF instance
        $pdf = new \TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Set document properties
        $pdf->SetCreator(config('app.name'));
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Sample PDF with Digital Signature');
        $pdf->SetSubject('Digital Signature Example');
        $pdf->SetKeywords('laravel, pdf, digital signature');

        // Set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // Set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // Set margins
        $pdf->SetMargins(10, 10, 10);

        // Set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, 10);

        // Set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // Initialize PDF document
        $pdf->AddPage();

        // Output digital signature image
        if (!empty($config['signature_file'])) {
            $signatureX = $config['signature_coordinates']['x'];
            $signatureY = $config['signature_coordinates']['y'];
            $pdf->Image($config['signature_file'], $signatureX, $signatureY, $config['signature_image_width'], $config['signature_image_height']);
        }

        // Output text for digital signature
        $pdf->SetFont('helvetica', '', $config['signature_font_size']);
        $pdf->SetXY(40, 20);
        $pdf->Cell(0, 0, 'Digitally signed by:', 0, 1);
        $pdf->SetXY(40, 25);
        $pdf->Cell(0, 0, 'Your Name', 0, 1);
        $pdf->SetXY(40, 30);
        $pdf->Cell(0, 0, 'Date: ' . date('Y-m-d H:i:s'), 0, 1);

        // Output PDF to the browser
        $pdfContent = $pdf->Output('sample.pdf', 'S');
        // Salvează conținutul PDF într-un fișier pe server
        $filePath = 'pdfs/' . uniqid() . '.pdf'; // Generează un nume unic pentru fișier
        Storage::disk('local')->put($filePath, $pdfContent);

        // Returnează calea către fișierul PDF salvat
        return $filePath;
    }
}
