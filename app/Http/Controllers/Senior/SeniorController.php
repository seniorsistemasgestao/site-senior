<?php

namespace App\Http\Controllers\Senior;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeniorController extends Controller
{
    public function home()
    {
        return view('Home.home');
    }

    public function login(){
        return view('Login.login');
    }
}
