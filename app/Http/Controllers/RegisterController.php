<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    
    public function Register()
    {
        return view('layouts.register', [
            'title' => 'Register'
        ]);

    }
    
    public function postRegister(Request $request)
    {
          //dd($request->all());
        $validated = $request->validate([
            'name' => 'required|max:20',
            'username' => 'required|min:5|max:50',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:5|max:12',
        ]);

        User::create($validated);
        /*
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);*/

    }
}
 