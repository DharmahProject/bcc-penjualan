<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $name = $user->name; // Access the name attribute
        $email = $user->email; // Access the email attribute

        return view('dashboard', [
            'email' => $email,
            'name' => $name,
        ]);
    }
}
