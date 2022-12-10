<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function Login()
    {
            return view('layouts.login', [
                'title' => 'User Login'
            ]);
    }

    public function postLogin(Request $request)
    {
        //dd($request->all());
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $validate ['password'] = bcrypt($validate['password']);
        if (Auth::attempt($validate)) {
            # code...
            $request->session()->regenerate();

            return redirect()->intended('welcome');
        }
        
        return back()->withErrors([
            'email' => 'Email Dont Match',
            'password' => 'Password Dont Match'
        ]);
    }
}
