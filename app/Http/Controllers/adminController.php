<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function showBidan(){
        // $data['tittle'] = 'Data Bidan';
        // $data['bidans'] = Bidan::all();

        dd('ini data bidan');
    }

    public function showPasien(){
        // $data['tittle'] = 'Data Bidan';
        // $data['bidans'] = Bidan::all();

        dd('ini data pasien');
    }

    public function showMateri(){
        // $data['tittle'] = 'Data Bidan';
        // $data['bidans'] = Bidan::all();

        dd('ini data materi');
    }
}
