<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class Inicio extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function index()
    {
      return view('index');  
    }
}
