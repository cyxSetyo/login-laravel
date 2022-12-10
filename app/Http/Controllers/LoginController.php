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
        $authented = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);
        //dd($authented);
                $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //dd('Berhasil Login');
        //$validate ['password'] = bcrypt($validate['password']);
        if (Auth::attempt($validate)) {
            # code...
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        
        return back()->with('loginError', 'Login Failed!!!');
    }   
}
