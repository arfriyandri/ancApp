<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    public function index(){
        return view('home');
    }

    public function indexOnLogin(){
        return view('homeOnLogin');
    }

}