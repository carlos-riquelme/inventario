<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proveedor;
use Faker\Generator as Faker;

$factory->define(Proveedor::class, function (Faker $faker) {
    $nombre = $faker->company;
    $slug = str_slug($nombre, '-');

    return [
        'nombre' => $nombre,
        'contacto' => $faker->name,
        'slug' => $slug,
        'email' => $faker->companyEmail,
        'telefono' => $faker->phoneNumber,
        'direccion' => $faker->address,
        'comuna' => $faker->city

    ];
});
