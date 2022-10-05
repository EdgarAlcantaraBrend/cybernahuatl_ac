<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use HasApiTokens, Notifiable;

class Usuarios extends Model
{
    //el nombre de la tabla 
    protected $table='usuarios';
    public $timestamps=false;

    protected $fillable = [

        '$paciente->usu_apellido',
        '$paciente->usu_usuario',
        '$paciente->usu_password',
        '$paciente->usu_nombres',
        '$paciente->usu_confirm_password',
        '$paciente->usu_correo'
       
    ];
}
