<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;

class materiController extends Controller
{
    public function index(){
        $data['title'] = 'Data Materi';
        $data['materis'] = Materi::all();

        return view('admin.materi.index', compact('data'));
    }

    public function create(){
        $data['title'] = 'Tambah Materi';

        return view('admin.materi.create', compact('data'));
    }

    public function store(Request $request){
        $request -> validate([
            'file' => 'required|mimes:pdf|max:10240',
            'judul' => 'required',
        ]);

        $file = $request->file('file');
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        $file->storeAs('public/uploads', $fileName);

        Materi::create([
            'file' => $fileName,
            'judul' => $request->judul,
        ]);

        return redirect() -> route('materi.index');

    }

    public function edit($id){
        $data['title'] = 'Data Materi';
        $data['materis'] = Materi::find($id);

        return view('admin.materi.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'file' => 'nullable|mimes:pdf|max:10240', // File bisa diubah atau tidak diubah
            'judul' => 'required',
        ]);

        $materi = Materi::find($id);

        $fileToDelete = 'public/uploads/' . $materi->file;

        // Alternatif menggunakan unlink
        if (file_exists(storage_path('app/' . $fileToDelete))) {
            unlink(storage_path('app/' . $fileToDelete));
        }

        $file = $request->file('file');

        $file->storeAs('public/uploads', $file);

        // Perbarui file dan judul di database
        $materi->update([
            'file' => $file,
            'judul' => $request->judul,
        ]);

        return redirect() -> route('materi.index');
    }

    public function destroy($id){
        $materi = Materi::find($id);

        $fileToDelete = 'public/uploads/' . $materi->file;

        // Alternatif menggunakan unlink
        if (file_exists(storage_path('app/' . $fileToDelete))) {
            unlink(storage_path('app/' . $fileToDelete));
        }

        $materi -> delete();

        return redirect() -> route('materi.index');
    }
}