<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Bidan;
use Illuminate\Support\Facades\Auth;

class pasienController extends Controller
{
    public function index(){

        $data['title'] = 'Data Pasien';
        $data['pasiens'] = Pasien::with('bidan') -> get();


        return view('admin.pasien.index', compact('data'));
    }

    public function indexBidan(){

        $bidanId = Auth::guard('bidan')->id();

        // Pastikan bidanId tidak null sebelum menggunakan find
        if ($bidanId !== null) {
            // Menggunakan findOrFail agar menghasilkan 404 jika bidan tidak ditemukan
            $bidan = Bidan::findOrFail($bidanId);

            // Pastikan bahwa $bidan->pasiens merupakan objek yang valid
            $pasiens = $bidan->pasiens;

            $data['title'] = 'Data Pasien';
            $data['pasiens'] = $pasiens;

            return view('bidan.pasien.index', compact('data'));
        } else {
            // Handle jika bidanId bernilai null
            abort(404, 'Bidan not found.');
        }
    }


}
