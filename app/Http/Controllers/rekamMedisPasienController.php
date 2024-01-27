<?php

namespace App\Http\Controllers;

use App\Models\RekamMedisPasien;
use App\Models\Pasien;
use App\Models\JadwalPasien;
use Illuminate\Http\Request;

class rekamMedisPasienController extends Controller
{
    // public function index($id){
    //     $data['title'] = 'Data Rekam Medis';
    //     $data['rekam_medis'] = RekamMedisPasien::where('id_pasiens',$id) -> get();
    //     $data['jadwal'] = JadwalPasien::where('id_pasiens',$id) -> get();
    //     $data['pasiens'] = Pasien::where('id',$id) -> get();

    //     return view('admin.pasien.rekamMedisPasien.index', compact('data'));
    // }
}
