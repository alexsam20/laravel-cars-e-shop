<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginComtroller extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
}
