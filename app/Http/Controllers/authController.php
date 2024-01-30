<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function login(){
        $data['title'] = "Login";

        return view('auth.login',$data);
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

        if (Auth::guard('admin')->attempt($data)) {
            // Logika setelah autentikasi berhasil
            return redirect('/admin');
        }

        else if (Auth::guard('bidan')->attempt($data)) {
            // Logika setelah autentikasi berhasil
            return redirect('/bidan/pasien');
        }

        else{
            return redirect('/auth/login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
