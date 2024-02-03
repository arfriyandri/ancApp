<?php

namespace App\Http\Controllers;

use App\Models\RekamMedisPasien;
use App\Models\Pasien;
use App\Models\JadwalPasien;
use Illuminate\Http\Request;
use App\Models\Bidan;
use Illuminate\Support\Facades\Auth;

class jadwalPasienController extends Controller
{
    public function destroy($id,$id_jadwal){
        $data['title'] = "Data Pasien";
        JadwalPasien::find($id_jadwal) -> delete();

        $bidanId = Auth::guard('bidan')->id();
        $data['pasiens'] = Bidan::find($bidanId) -> pasiens;

        $data['rekam_medis'] = RekamMedisPasien::where('id_pasiens',$id) -> get();
        $data['jadwals'] = JadwalPasien::where('id_pasiens',$id) -> get();

        return view('bidan.pasien.rekamMedisPasien.index', compact('data'));
    }
}
