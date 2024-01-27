<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\RekamMedisPasien;
use App\Models\JadwalPasien;

class adminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function indexRekam($id){
        $data['rekam_medis'] = RekamMedisPasien::where('id_pasiens',$id) -> get();
        $data['jadwal'] = JadwalPasien::where('id_pasiens',$id) -> get();
        $data['pasiens'] = Pasien::where('id',$id) -> get();

        return view('admin.pasien.rekamMedisPasien.index', compact('data'));
    }
}
