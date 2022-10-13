<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Abecedario extends Controller
{
    public function abecedario(){
        return view('layouts.abecedario');
    }
}
