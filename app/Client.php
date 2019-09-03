<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $fillable = [
        'nombre',
        'apellidos',
        'direccion',
        'slug',
        'comuna',
        'email',
        'telefono'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
