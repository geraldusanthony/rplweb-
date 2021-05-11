<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewcontroller extends Controller
{
    public function view(){
        return view('Layouts.layout');
    }
}
