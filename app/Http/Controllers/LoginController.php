<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function Login()
    {
            return view('layouts.login', [
                'title' => 'User Login'
            ]);
    }

    public function postLogin()
    {
        return request()->all();
    }
}
