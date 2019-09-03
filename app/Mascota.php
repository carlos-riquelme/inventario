<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    public $fillable = [
        'nombre',
        'especie',
        'raza',
        'sexo',
        'tratamiento',
        'fecha_nacimiento',
        'fecha_deceso'
    ];
}
