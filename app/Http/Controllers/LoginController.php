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
    public function authenticate(){

        if(auth()->attempt(request(['correo','password']))){
            return redirect()->to('/');
            // return back()->withErrors([
            //     'message'=>'The email or password is incorrect, please try again'
            // ]);
        }
        return redirect()->to('/welcome');

    }
    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }
}
