<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class pasienController extends Controller
{
    public function index(){
        $data['title'] = 'Data Pasien';
        $data['pasiens'] = Pasien::with('bidan') -> get();

        return view('admin.pasien.index', compact('data'));
    }
}
