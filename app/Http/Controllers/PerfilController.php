<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;

class PerfilController extends Controller
{
    public function perfil(){
        return view('perfil');  
      }
}
