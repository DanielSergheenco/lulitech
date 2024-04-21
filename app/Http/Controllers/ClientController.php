<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;

class ClientController extends Controller
{

    public function qoute()
    {
        // Logic specific pentru qoute

        //Verificare daca user autentificat

        return view('client.dashboard', [
            'referralLink' => $referralLink,
            'referredUsers' => $referredUsers
        ]);
    }
    /**
     * Display the client dashboard.
     */
    public function dashboard()
    {
        // Logic specific pentru afișarea dashboard-ului clientului
        $user = Auth::user();
        $referralLink = User::findOrFail($user->getAuthIdentifier())->getReferralLink();
        $userId = $user->getAttribute('affiliate_id');
        $referredUsers = User::where('referred_by', $userId)->get();
        $clientOrders = Order::where('client_id', auth()->id())->get();

        // Iterăm prin fiecare comandă și adăugăm câmpul 'detailed_service'
        foreach ($clientOrders as $order) {
            switch ($order->service) {
                case 'dev':
                    $order->detailed_service = 'Web Development';
                    break;
                case 'seo':
                    $order->detailed_service = 'SEO';
                    break;
                case 'sem':
                    $order->detailed_service = 'Search Engine Marketing';
                    break;
                case 'smm':
                    $order->detailed_service = 'Social Media Marketing';
                    break;
                case 'em':
                    $order->detailed_service = 'E-mail Marketing';
                    break;
                default:
                    $order->detailed_service = 'Unknown Service';
            }
        }
        return view('client.dashboard', [
            'referralLink' => $referralLink,
            'referredUsers' => $referredUsers,
            'clientOrders' => $clientOrders
        ]);
    }

    public function affiliate()
    {
        $user = Auth::user();
        $userId = $user->getAttribute('affiliate_id');
        $referralLink = User::findOrFail($user->getAuthIdentifier())->getReferralLink();
        $referredUsers = User::where('referred_by', $userId)->get();

        return view('client.affiliate', [
            'referralLink' => $referralLink,
            'referredUsers' => $referredUsers
        ]);
    }

    public function invoices()
    {
        // Logic specific for retrieving invoices
        $user = Auth::user();
        $invoices = $user->invoices();
        return view('client.invoices', [
            'invoices' => $invoices
        ]);
    }


}
