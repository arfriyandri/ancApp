<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            $id = Auth::guard('admin')->id();
            Alert::success('Login Sukses', 'Selamat datang');
            return redirect('/admin');
        }

        else if (Auth::guard('bidan')->attempt($data)) {
            // Logika setelah autentikasi berhasil
            Alert::success('Login Sukses', 'Selamat datang');
            return redirect('/bidan/pasien');
        }

        else if (Auth::guard('pasien')->attempt($data)) {
            Alert::success('Login Sukses', 'Selamat datang');
            return redirect('/pasien');
        }

        else{
            Alert::warning('Gagal Login', 'Masukan Username atau Password dengan benar!!!');
            return redirect() -> back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
