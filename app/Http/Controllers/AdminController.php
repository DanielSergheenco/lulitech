<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function dashboard()
    {
        // Logic specific pentru afișarea dashboard-ului adminului
        return view('admin.dashboard');
    }
}
