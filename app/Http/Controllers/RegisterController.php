<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'required|min:3|max:20',
            'username' => 'required|min:5|max:50',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:5|max:12',
          ]);

        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);
        $request->session()->flash('success', 'Registration Success, Please Login First!');
        return redirect('/login');

    }
}
 