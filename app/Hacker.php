<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hacker extends Model
{
    protected $fillable = 
    [
        'nombre', 
        'email'
    ];
}
