<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    public $timestamps = false; 
	protected $fillable = [
        'nombre','apellido','cedula','sexo'
    ];
}
