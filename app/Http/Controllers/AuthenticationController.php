<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    //
    public function login() {
        return view('login');
    }

    public function register() {
        return view('signup');
    }
}
