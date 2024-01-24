<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidan;

class bidanController extends Controller
{
    public function index(){
        $data['tittle'] = 'Data Bidan';
        $data['bidans'] = Bidan::all();

        return view('admin.bidan.index', $data);
    }

    public function create(){
        $data['tittle'] = "Data Bidan";

        return view('admin.bidan.create', $data);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'alamat' => 'required',
            'password' => 'required',
        ]);

        $dataToSave =[
            'name' => $request->name,
            'username' => $request->username,
            'alamat' => $request->alamat,
            'password' => bcrypt($request->password)
        ];

        Bidan::create($dataToSave);

        return redirect() -> route('bidan.index');

    }

    public function edit($id){
        $data['tittle'] = 'Data Bidan';
        $data['bidans'] = Bidan::find($id);

        return view('admin.bidan.edit', $data);
    }

    public function update(Request $request, $id){
        $username = $request -> username;
        $name = $request -> name;
        $alamat = $request -> alamat;
        $password = bcrypt($request -> password);

        $dataToUpdate = [
            'username' => $username,
            'name' => $name,
            'alamat' => $alamat,
            'password' => $password,
        ];

        Bidan::find($id) -> update($dataToUpdate);

        return redirect() -> route('bidan.index');
    }

    public function destroy($id){
        Bidan::find($id) -> delete();

        return redirect() -> route('bidan.index');
    }

}
