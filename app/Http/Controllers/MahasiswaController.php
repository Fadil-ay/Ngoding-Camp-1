<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class MahasiswaController extends Controller
{
    public function getAllData(){
        $data = Mahasiswa::all();
        return view('mahasiswa')->with('data', $data);
    }

    public function createData(Request $request){
        $validation = Validator::make($request->all(),[
            'nama'     => 'required',
            'nim'      => 'required',
            'alamat'   => 'required',
        ]);

        if($validation->fails()){
            $errors = $validation->errors()->first();
            Alert::warning('Check your validation', $errors);
            return redirect()->back();
        }

        $data = new Mahasiswa();
        $data->nama = $request->nama;
        $data->nim = $request->nim;
        $data->alamat = $request->alamat;
        $data->save();
        Alert::success('Berhasil Tambah Data');
        return redirect()->back();
    }
}
