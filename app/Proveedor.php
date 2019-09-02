<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $guarded = [
        'id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
