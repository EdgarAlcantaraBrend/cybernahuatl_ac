<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursos extends Controller
{
    public function cursos(){
        return view('cursos');
    }
}
