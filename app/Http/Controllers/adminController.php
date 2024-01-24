<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bidan;

class adminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function showBidan(){
        $data['tittle'] = 'Data Bidan';
        $data['bidans'] = Bidan::all();

        return view('admin.bidan.dataBidan', $data);
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
