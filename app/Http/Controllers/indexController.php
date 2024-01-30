<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        $data['title'] = "Antenatal Care";

        return view('home', $data);
    }

    public function indexOnLogin(){
        return view('homeOnLogin');
    }

}
