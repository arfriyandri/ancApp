<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Materi;
use App\Models\Bidan;
use App\Models\Pasien;
use App\Models\RekamMedisPasien;
use Illuminate\Support\Facades\Auth;

class materiController extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Materi';
        $data['materis'] = Materi::all();
        $title = 'Hapus Data!';
        $text = 'Apakah Anda Yakin?';
        confirmDelete($title, $text);

        return view('admin.materi.index', compact('data'));
    }

    public function indexMateri()
    {
        $bidanId = Auth::guard('bidan')->id();

        $data = [
            'title' => 'Data Materi',
            'materis' => Materi::all(),
            'bidans' => Bidan::find($bidanId),
        ];

        return view('bidan.materi.index', compact('data'));
    }

    public function create()
    {
        $data['title'] = 'Tambah Materi';

        return view('admin.materi.create', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:10240',
            'judul' => 'required',
        ]);

        $file = $request->file('file');

        $file->storeAs('public/uploads', $file->getClientOriginalName());

        Materi::create([
            'file' => $file->getClientOriginalName(),
            'judul' => $request->judul,
        ]);

        Alert::success('Berhasil', 'Data Materi Berhasil Ditambahkan');

        return redirect()->route('materi.index');
    }

    public function edit($id)
    {
        $data['title'] = 'Data Materi';
        $data['materis'] = Materi::find($id);

        return view('admin.materi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'file' => 'nullable|mimes:pdf|max:10240', // File bisa diubah atau tidak diubah
            'judul' => 'required',
        ]);

        $materi = Materi::find($id);

        $fileToDelete = 'public/uploads/' . $materi->file;

        $file = $request->file('file');
        $judul = $request->judul;

        if ($file) {
            // File handling logic
            $fileToDelete = 'public/uploads/' . $materi->file;

            if (file_exists(storage_path('app/' . $fileToDelete))) {
                unlink(storage_path('app/' . $fileToDelete));
            }

            $file->storeAs('public/uploads', $file->getClientOriginalName());
            // Update file in the database
            $materi->update([
                'file' => $file->getClientOriginalName(),
            ]);
        } else {
            $materi->update([
                'judul' => $judul,
            ]);
        }

        Alert::success('Berhasil', 'Data Materi Berhasil Diperbarui');

        return redirect()->route('materi.index');
    }

    public function destroy($id)
    {
        $materi = Materi::find($id);

        $fileToDelete = 'public/uploads/' . $materi->file;

        // Alternatif menggunakan unlink
        if (file_exists(storage_path('app/' . $fileToDelete))) {
            unlink(storage_path('app/' . $fileToDelete));
        }

        $materi->delete();
        Alert::success('Berhasil', 'Data Materi Berhasil Dihapus');

        return redirect()->route('materi.index');
    }
}
