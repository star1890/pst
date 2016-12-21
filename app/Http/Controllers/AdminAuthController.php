<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class AdminAuthController extends Controller
{    
        
    public function getLogin()
    {
        return view('layout.admin.login');
    }
    
    public function postLogin()
    {
        return view('home');
    }
    
    public function getLogout()
    {
        return view('home');
    }
}
