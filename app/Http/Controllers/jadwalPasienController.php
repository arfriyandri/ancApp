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

    public function create(){

        $data['title'] = "Data Pasien";

        $bidanId= Auth::guard('bidan')->id();
        $bidan = Bidan::findOrFail($bidanId);
        $data['bidans'] = Bidan::find($bidanId);
        $pasiens = $bidan->pasiens;
        $data['pasiens'] = $pasiens;

        return view('bidan.pasien.jadwalPasien.create', compact('data','pasiens'));
    }

    public function store(Request $request, $id){
        $request->validate([
            'id_bidans' => 'required',
            'id_pasiens' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
        ]);

        $dataToSave =[
            'id_bidans' => $request->id_bidans,
            'id_pasiens' => $request->id_pasiens,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ];

        JadwalPasien::create($dataToSave);

        $data['title'] = "Data Pasien";
        $data['rekam_medis'] = RekamMedisPasien::where('id_pasiens',$id) -> get();
        $data['jadwals'] = JadwalPasien::where('id_pasiens',$id) -> get();
        $data['pasiens'] = Pasien::where('id',$id) -> get();

        $bidanId= Auth::guard('bidan')->id();
        $bidan = Bidan::findOrFail($bidanId);
        $data['bidans'] = Bidan::find($bidanId);


        return view('bidan.pasien.rekamMedisPasien.index', compact('data'));

    }

    public function edit($id, $id_jadwal){
        $data['title'] = "Data Pasien";
        $data['jadwals'] = jadwalPasien::find($id_jadwal);

        $bidanId = Auth::guard('bidan')->id();
        $data['pasiens'] = Bidan::find($bidanId) -> pasiens;

        return view('bidan.pasien.jadwalPasien.edit', compact('data'));
    }

    public function update(Request $request,$id,$id_jadwal){

        $tanggal = $request->tanggal;
        $waktu = $request->waktu;

        $dataToUpdate = [
            'tanggal' => $tanggal,
            'waktu' => $waktu,
        ];

        jadwalPasien::find($id_jadwal) -> update($dataToUpdate);

        return redirect() -> route('rekamMedis.index',['id' => $id]);
    }

    public function destroy($id,$id_jadwal){
        $data['title'] = "Data Pasien";
        JadwalPasien::find($id_jadwal) -> delete();

        $bidanId = Auth::guard('bidan')->id();
        $data['bidans'] = Bidan::find($bidanId);
        $data['pasiens'] = Bidan::find($bidanId) -> pasiens;

        $data['rekam_medis'] = RekamMedisPasien::where('id_pasiens',$id) -> get();
        $data['jadwals'] = JadwalPasien::where('id_pasiens',$id) -> get();

        return view('bidan.pasien.rekamMedisPasien.index', compact('data'));
    }
}
