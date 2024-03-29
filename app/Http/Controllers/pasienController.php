<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Pasien;
use App\Models\Bidan;
use App\Models\JadwalPasien;
use App\Models\Materi;
use App\Models\RekamMedisPasien;
use Illuminate\Support\Facades\Auth;

class pasienController extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Pasien';
        $data['pasiens'] = Pasien::with('bidan')->get();

        return view('admin.pasien.index', compact('data'));
    }

    public function indexPasien()
    {
        $data['title'] = 'Antenatal Care';
        $data['materis'] = Materi::all();

        $pasienId = Auth::guard('pasien')->id();
        $data['pasiens'] = Pasien::findOrFail($pasienId);
        $data['rekamMedis'] = RekamMedisPasien::where('id_pasiens', $pasienId)->get();
        $data['jadwal'] = JadwalPasien::where('id_pasiens', $pasienId)->get();

        return view('pasien.index', compact('data'));
    }

    public function indexBidan()
    {
        $data['title'] = 'Data Pasien';
        $bidanId = Auth::guard('bidan')->id();

        // Pastikan bidanId tidak null sebelum menggunakan find
        if ($bidanId !== null) {
            // Menggunakan findOrFail agar menghasilkan 404 jika bidan tidak ditemukan
            $data['bidans'] = Bidan::findOrFail($bidanId);
            // Pastikan bahwa $bidan->pasiens merupakan objek yang valid
            $pasiens = $data['bidans']->pasiens;
            $data['pasiens'] = $pasiens;

            $title = 'Hapus Data!';
            $text = 'Apakah Anda Yakin?';
            confirmDelete($title, $text);

            return view('bidan.pasien.index', compact('data'));
        } else {
            // Handle jika bidanId bernilai null
            abort(404, 'Bidan not found.');
        }
    }

    public function create()
    {
        $data['title'] = 'Data Pasien';

        $bidanId = Auth::guard('bidan')->id();
        $data['bidans'] = Bidan::findOrFail($bidanId);
        $pasiens = $data['bidans']->pasiens;
        $data['pasiens'] = $pasiens;

        return view('bidan.pasien.create', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_bidans' => 'required',
            'username' => 'required',
            'name' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'umur' => 'required',
            'agama' => 'required',
            'tinggi_badan' => 'required',
            'nomor_hp' => 'required',
        ]);

        $dataToSave = [
            'id_bidans' => $request->id_bidans,
            'username' => $request->username,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'umur' => $request->umur,
            'agama' => $request->agama,
            'tinggi_badan' => $request->tinggi_badan,
            'nomor_hp' => $request->nomor_hp,
        ];

        Pasien::create($dataToSave);
        Alert::success('Berhasil', 'Data Pasien Berhasil Ditambahkan');

        return redirect('bidan/pasien');
    }

    public function edit($id)
    {
        $data['title'] = 'Data Pasien';
        $data['idPasiens'] = Pasien::find($id);

        $bidanId = Auth::guard('bidan')->id();
        $data['bidans'] = Bidan::findOrFail($bidanId);

        $pasiens = $data['bidans']->pasiens;
        $data['pasiens'] = $pasiens;

        return view('bidan.pasien.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $username = $request->username;
        $name = $request->name;
        $password = bcrypt($request->password);
        $alamat = $request->alamat;
        $pekerjaan = $request->pekerjaan;
        $umur = $request->umur;
        $agama = $request->agama;
        $tinggi_badan = $request->tinggi_badan;
        $nomor_hp = $request->nomor_hp;

        $dataToUpdate = [
            'username' => $username,
            'name' => $name,
            'password' => $password,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan,
            'umur' => $umur,
            'agama' => $agama,
            'tinggi_badan' => $tinggi_badan,
            'nomor_hp' => $nomor_hp,
        ];

        Pasien::find($id)->update($dataToUpdate);
        Alert::success('Berhasil', 'Data Bidan Berhasil Diperbarui');

        return redirect('bidan/pasien');
    }

    public function destroy($id)
    {
        Pasien::find($id)->delete();
        Alert::success('Berhasil', 'Data Bidan Berhasil Dihapus');

        return redirect()->back();
    }
}
