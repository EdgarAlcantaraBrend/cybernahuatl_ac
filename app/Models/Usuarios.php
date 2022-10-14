<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use HasApiTokens, Notifiable;

class Usuarios extends Model
{
    //el nombre de la tabla 
    protected $table='t_usuarios';
    public $timestamps=false;

    protected $fillable = [

        '$registroUsuario->nombre',
        '$registroUsuario->correo',
        '$registroUsuario->password',
        '$registroUsuario->confirm_password'

       
    ];
}
