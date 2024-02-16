<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\RekamMedisPasien;
use App\Models\Pasien;
use App\Models\JadwalPasien;
use Illuminate\Http\Request;
use App\Models\Bidan;
use Illuminate\Support\Facades\Auth;

class jadwalPasienController extends Controller
{

    public function create($id){

        $bidanId= Auth::guard('bidan')->id();
        $data = [
            'title' => "Data Pasien",
            'bidans' => Bidan::find($bidanId),
            'pasiens' => Pasien::find($id),
        ];

        return view('bidan.pasien.jadwalPasien.create', compact('data'));
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

        Alert::success('Berhasil', 'Data Jadwal Pasien Berhasil Ditambahkan');


        return redirect() -> route('rekamMedis.index',$id);

    }

    public function edit($id, $id_jadwal){

        $bidanId = Auth::guard('bidan')->id();
        $data = [
            'title' => "Data Pasien",
            'jadwals' => jadwalPasien::find($id_jadwal),
            'bidans' => Bidan::find($bidanId),
            'pasiens' => Pasien::find($id),
        ];

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

        Alert::success('Berhasil', 'Data Jadwal Pasien Berhasil Diperbarui');

        return redirect() -> route('rekamMedis.index',$id);
    }

    public function destroy($id,$id_jadwal){

        JadwalPasien::find($id_jadwal) -> delete();

        Alert::success('Berhasil', 'Data Jadwal Pasien Berhasil Dihapus');

        return redirect() -> route('rekamMedis.index',$id);
    }
}
