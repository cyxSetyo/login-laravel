<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function Register()
    {
        return view('layouts.register', [
            "title" => "Register",
            "active" => "register"
        ]);
    }
}
