<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Bidan;

class bidanController extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Bidan';
        $data['bidans'] = Bidan::all();
        $title = 'Hapus Data!';
        $text = 'Apakah Anda Yakin?';
        confirmDelete($title, $text);

        return view('admin.bidan.index', $data);
    }

    public function create()
    {
        $data['title'] = 'Data Bidan';

        return view('admin.bidan.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'alamat' => 'required',
            'password' => 'required',
        ]);

        $dataToSave = [
            'name' => $request->name,
            'username' => $request->username,
            'alamat' => $request->alamat,
            'password' => bcrypt($request->password),
        ];

        Bidan::create($dataToSave);
        Alert::success('Berhasil', 'Data Bidan Berhasil Ditambahkan');

        return redirect()->route('bidan.index');
    }

    public function edit($id)
    {
        $data['title'] = 'Data Bidan';
        $data['bidans'] = Bidan::find($id);

        return view('admin.bidan.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $username = $request->username;
        $name = $request->name;
        $alamat = $request->alamat;
        $password = bcrypt($request->password);

        $dataToUpdate = [
            'username' => $username,
            'name' => $name,
            'alamat' => $alamat,
            'password' => $password,
        ];

        Bidan::find($id)->update($dataToUpdate);
        Alert::success('Berhasil', 'Data Bidan Berhasil Diperbarui');

        return redirect()->route('bidan.index');
    }

    public function destroy($id)
    {
        Bidan::find($id)->delete();
        Alert::success('Berhasil', 'Data Bidan Berhasil Dihapus');

        return back();
    }
}
