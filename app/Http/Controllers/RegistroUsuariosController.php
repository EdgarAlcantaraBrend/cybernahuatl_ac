<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegistroUsuariosController extends Controller
{
     //la vista enn el interfaz   
     public function register(){
        return view('/login.registro');
    }  
    public function store(Request $request){
        $registroUsuario = New Usuarios();

        //la instancia ->atributo bd->recoger datos->atributo del formulario
        $registroUsuario->nombre=$request->name;
        $registroUsuario->correo=$request->email;
        $registroUsuario->password=sha1($request->password);
        $registroUsuario->password_confirm=sha1($request->password_confirm);


         $registroUsuario->save();
         return redirect()->to('/welcome', compact('registroUsuario'));


    } 
}
