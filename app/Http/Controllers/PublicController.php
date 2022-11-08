<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function registerview(){
        return view('auth.register');
    }
    public function loginview(){
        return view('auth.login');
    }
}
