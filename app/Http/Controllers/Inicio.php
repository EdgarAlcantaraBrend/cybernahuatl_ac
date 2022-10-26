<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class Inicio extends Controller
{
  public function welcome(){
    $registroUsuario=Usuarios::all();
    return view('welcome');
  }

  public function index(){
    return view('index');  
  }

  public function abecedario(){
    return view('abecedario');  
  }
  public function numeracion(){
    return view('numeracion');  
  }
  public function cuerpo(){
    return view('cuerpo');  
  }
  public function diccionario(){
    return view('diccionario');  
  }
  public function cursos(){
    return view('cursos');  
  }
  public function profesores(){
    return view('profesores');  
  }
  
}
