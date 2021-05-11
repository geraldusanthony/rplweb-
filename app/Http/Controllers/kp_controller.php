<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa; 

class kp_controller extends Controller
{
    public function index(){
        return view('mahasiswa.kp');
    }
}
