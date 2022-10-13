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

        '$paciente->nombre',
        '$paciente->correo',
        '$paciente->password',
        '$paciente->confirm_password'

       
    ];
}
