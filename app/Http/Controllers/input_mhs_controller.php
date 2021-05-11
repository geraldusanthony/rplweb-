<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa; 

class input_mhs_controller extends Controller
{
    public function index(){
        return view('mahasiswa.input');
    }
}
