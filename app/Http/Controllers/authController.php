<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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

        if (Auth::guard('admin')->attempt($data)) {
            // Logika setelah autentikasi berhasil
            return redirect('/admin');
        }

        else if (Auth::guard('bidan')->attempt($data)) {
            // Logika setelah autentikasi berhasil
            dd('bidan');
        }

        else{
            return redirect('/auth/login');
        }


        // if (Auth::attempt($data)) {
        //     if(Auth::admin() -> role == 'admin'){
        //         dd('admin new');
        //         // return redirect('/admin');
        //     } else if(Auth::user() -> role == 'bidan') {
        //         dd('hai bidan');
        //     } else if(Auth::user() -> role == 'pasien'){
        //         dd('hai pasien');
        //     } else {
        //         dd(Auth::admin());
        //     }
        // } else {
        //     // return redirect('/login');
        // }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
