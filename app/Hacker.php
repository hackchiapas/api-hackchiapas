<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hacker extends Model
{
    protected $fillable = 
    [
        'nombre', 
        'apellido_paterno', 
        'apellido_materno', 
        'genero', 
        'edad', 
        'email', 
        'telefono', 
        'instituto', 
        'estado', 
        'ciudad', 
        'talla_playera', 
        'codigo_confirmacion', 
        'confirmado'
    ];
}
