<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {

    $nombre = $faker->firstName;
    $apellido = $faker->lastName;
    $slug = str_slug($nombre . '-' . $apellido);

    return [
        'nombre' => $nombre,
        'apellidos' => $apellido,
        'slug' => $slug,
        'direccion' => $faker->streetAddress,
        'email' => $faker->email,
        'comuna' => $faker->city,
        'telefono' => $faker->phoneNumber
    ];
});
