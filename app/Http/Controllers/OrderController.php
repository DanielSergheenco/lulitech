<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendPassword;


class OrderController extends Controller
{
    //
    public function create(Request $request)
    {
        return view('orders.services');
    }
    public function createWebsiteOrderForm()
    {
        return view('orders.create_website');
    }

    public function store(Request $request)
    {
        // Validăm datele din formular
        $request->validate([
            'category' => 'nullable|in:presentation,e-commerce,blog,custom,na',
            'business_name' => 'required|string|max:255',
            'business_description' => 'required|string|max:4012',
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'phone' => 'required|string',
        ]);

        // Verificăm dacă există deja un utilizator cu adresa de email furnizată
        $user = User::where('email', $request->input('email'))->first();
        $notification = "Please login into your accout!";
        // Dacă utilizatorul există, folosim ID-ul său
        if ($user) {
            $clientId = $user->id;
        } else {
            // Dacă utilizatorul nu există, creăm unul nou
            $password = Str::random(10); // Generăm o parolă aleatoare
            try{
                Mail::to($request->input('email'))->send(new SendPassword($password));
            }catch(\Exception $e){}

            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($password),
                'phone_number' => $request->input('phone'),
            ]);
            $user->assignRole('Client');
            $clientId = $user->id;
            $notification = "The password was send to yor e-mail: ".$request->input('email');

        }

        $user->phone_number = $request->input('phone');

        // Creăm comanda folosind $clientId
        $order = new Order();
        $order->service = 'dev';
        $order->category = $request->input('category');
        $order->business_name = $request->input('business_name');
        $order->business_description = $request->input('business_description');
        $order->client_id = $clientId;
        // Completați și alte câmpuri de aici
        // Încercă să salveze comanda în baza de date
        if ($order->save()) {
            // Comanda a fost salvată cu succes
            return redirect()->route('order.success')->with('notification', $notification);
        } else {
            // Nu s-a putut salva comanda
            return back()->withInput()->with('error', 'A apărut o eroare. Vă rugăm să încercați din nou.');
        }
    }

    public function success(Request $request)
    {
        return view('orders.success');
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }

}
