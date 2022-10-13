<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    public function login(){
        return view('/login.login');
    }
    public function authenticate(Request $request){

<<<<<<< Updated upstream
        if(auth()->attempt(request(['correo','password']))){
=======
        if((auth()->attempt(request(['usu_correo','usu_password'])))){
>>>>>>> Stashed changes
            return redirect()->to('/');
            // return back()->withErrors([
            //     'message'=>'The email or password is incorrect, please try again'
            // ]);
        }else{
            print("mal");
        }
        return redirect()->to('/welcome');

    }
    
}
