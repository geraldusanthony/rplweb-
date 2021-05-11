<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;

class mahasiswa_controller extends Controller
{
    public function index(){
        $data_mahasiswa = mahasiswa::all();
        return view('mahasiswa.index',compact('data_mahasiswa'));
    }

    public function create( Request $request){
        \App\mahasiswa::create($request->all());
        return redirect('mahasiswa')->with('Sukses','data berhasil ditambahkan');
    }

    public function Vedit($id){
        $data_mahasiswa= mahasiswa::find($id);
        $data=[
            'tittle'=>'mahasiswa',
            'data_mahasiswa'=>$data_mahasiswa
        ];
        return view('detail.edit',$data);
    }

    public function editdetail($id,Request $request){
        $data = mahasiswa::find($id);
        
        $data->save();
        return redirect()->route('indexdetail');
    }

    public function delete($nim){
        $data = mahasiswa::find($nim);
        $data->delete();
        return redirect()->back();
    }
}
