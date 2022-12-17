<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function DashboardAdmin()
    {
            
        return view('welcome', [
            'title' => 'Dashboard'
        ]);
    }

    public function DashboardMember()
    {
        return view('WelcomeMember', [
            'title' => 'Dashboard'
        ]);
    }

}
