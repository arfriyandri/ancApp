<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\RekamMedisPasien;
use App\Models\Pasien;
use App\Models\JadwalPasien;
use Illuminate\Http\Request;
use App\Models\Bidan;
use Illuminate\Support\Facades\Auth;

class rekamMedisPasienController extends Controller
{
    public function indexPasien()
    {
        $pasienId = Auth::guard('pasien')->id();
        $data['pasiens'] = Pasien::find($pasienId);
        $data['rekamMedis'] = RekamMedisPasien::where('id_pasiens', $pasienId)->get();

        return view('pasien.rekamMedis', compact('data'));
    }

    public function indexRekam($id)
    {
        $data['title'] = 'Data Pasien';
        $bidanId = Auth::guard('bidan')->id();
        $data['bidans'] = Bidan::find($bidanId);
        $data['pasiens'] = Bidan::find($bidanId)->pasiens;

        $data['rekam_medis'] = RekamMedisPasien::where('id_pasiens', $id)->get();
        $data['jadwals'] = JadwalPasien::where('id_pasiens', $id)->get();

        $title = 'Hapus Data!';
        $text = 'Apakah Anda Yakin?';
        confirmDelete($title, $text);

        return view('bidan.pasien.rekamMedisPasien.index', compact('data'));
    }

    public function create()
    {
        $data['title'] = 'Data Pasien';

        $bidanId = Auth::guard('bidan')->id();
        $data['bidans'] = Bidan::find($bidanId);
        $bidan = Bidan::findOrFail($bidanId);
        $pasiens = $bidan->pasiens;
        $data['pasiens'] = $pasiens;

        return view('bidan.pasien.rekamMedisPasien.create', compact('data', 'pasiens'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'id_bidans' => 'required',
            'id_pasiens' => 'required',
            'berat_badan' => 'required',
            'jumlah_janin' => 'required',
            'keluhan' => 'required',
            'tfu' => 'required',
            'uk' => 'required',
            'hb' => 'required',
        ]);

        $dataToSave = [
            'id_bidans' => $request->id_bidans,
            'id_pasiens' => $request->id_pasiens,
            'berat_badan' => $request->berat_badan,
            'jumlah_janin' => $request->jumlah_janin,
            'keluhan' => $request->keluhan,
            'tfu' => $request->tfu,
            'uk' => $request->uk,
            'hb' => $request->hb,
        ];

        RekamMedisPasien::create($dataToSave);

        $data['title'] = 'Data Pasien';
        $data['rekam_medis'] = RekamMedisPasien::where('id_pasiens', $id)->get();
        $data['jadwals'] = JadwalPasien::where('id_pasiens', $id)->get();
        $data['pasiens'] = Pasien::where('id', $id)->get();

        $bidanId = Auth::guard('bidan')->id();
        $data['bidans'] = Bidan::find($bidanId);

        Alert::success('Berhasil', 'Data Pasien Berhasil Ditambahkan');

        return view('bidan.pasien.rekamMedisPasien.index', compact('data'));
    }

    public function edit($id, $id_rekamMedis)
    {
        $data['title'] = 'Data Pasien';
        $data['rekam_medis'] = RekamMedisPasien::find($id_rekamMedis);

        $bidanId = Auth::guard('bidan')->id();
        $data['bidans'] = Bidan::find($bidanId);
        $data['pasiens'] = Bidan::find($bidanId)->pasiens;

        return view('bidan.pasien.rekamMedisPasien.edit', compact('data'));
    }

    public function update(Request $request, $id, $id_rekamMedis)
    {
        $berat_badan = $request->berat_badan;
        $jumlah_janin = $request->jumlah_janin;
        $keluhan = $request->keluhan;
        $tfu = $request->tfu;
        $uk = $request->uk;
        $hb = $request->hb;

        $dataToUpdate = [
            'berat_badan' => $berat_badan,
            'jumlah_janin' => $jumlah_janin,
            'keluhan' => $keluhan,
            'tfu' => $tfu,
            'uk' => $uk,
            'hb' => $hb,
        ];

        RekamMedisPasien::find($id_rekamMedis)->update($dataToUpdate);

        Alert::success('Berhasil', 'Data Pasien Berhasil Diperbarui');

        return redirect()->route('rekamMedis.index', ['id' => $id]);
    }

    public function destroy($id, $id_rekamMedis)
    {
        $data['title'] = 'Data Pasien';
        RekamMedisPasien::find($id_rekamMedis)->delete();

        $bidanId = Auth::guard('bidan')->id();
        $data['bidans'] = Bidan::find($bidanId);
        $data['pasiens'] = Bidan::find($bidanId)->pasiens;

        $data['rekam_medis'] = RekamMedisPasien::where('id_pasiens', $id)->get();
        $data['jadwals'] = JadwalPasien::where('id_pasiens', $id)->get();

        Alert::success('Berhasil', 'Data Pasien Berhasil Dihapus');

        return view('bidan.pasien.rekamMedisPasien.index', compact('data'));
    }
}
