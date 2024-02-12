<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Pasien;
use App\Models\RekamMedisPasien;
use App\Models\JadwalPasien;
use App\Models\grafikAdmin;
use App\Models\countBidans;
use App\Models\countPasiens;
use App\Models\countMateris;


class adminController extends Controller
{
    public function index(){
        $data['grafik'] = grafikAdmin::get();
        $data['countBidans'] = countBidans::get();
        $data['countPasiens'] = countPasiens::get();
        $data['countMateris'] = countMateris::get();

        return view('admin.index', compact('data'));
    }

    public function indexRekam($id){
        $data['rekam_medis'] = RekamMedisPasien::where('id_pasiens',$id) -> get();
        $data['jadwal'] = JadwalPasien::where('id_pasiens',$id) -> get();
        $data['pasiens'] = Pasien::where('id',$id) -> get();

        return view('admin.pasien.rekamMedisPasien.index', compact('data'));
    }
}
