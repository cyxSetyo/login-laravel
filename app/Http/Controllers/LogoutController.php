<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function Logout()
    {
        return view('layouts.login', [
            'title' => 'Logout'
        ]);
    }
}
