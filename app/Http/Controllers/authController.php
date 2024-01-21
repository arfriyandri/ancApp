<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function verifikasi(){
        dd('verifikasi');
    }

    public function loginProcess(Request $request){
        $request -> validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $data =[
            'username' => $request -> username,
            'password' => $request -> password,
        ];

        if (Auth::attempt($data)) {
            if(Auth::user() -> role == 'admin'){
                dd('hai admin');
            } else if(Auth::user() -> role == 'bidan') {
                dd('hai bidan');
            } else if(Auth::user() -> role == 'pasien'){
                dd('hai pasien');
            }
        } else {
            dd('gagal');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
