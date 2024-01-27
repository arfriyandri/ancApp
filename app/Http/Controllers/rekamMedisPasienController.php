<?php

namespace App\Http\Controllers;

use App\Models\RekamMedisPasien;
use Illuminate\Http\Request;

class rekamMedisPasienController extends Controller
{
    public function index(){
        $data['title'] = 'Data Pasien';
        $data['rekam_medis'] = RekamMedisPasien::with('pasien') -> get();

        return view('admin.pasien.rekamMedisPasien.index', compact('data'));
    }
}
