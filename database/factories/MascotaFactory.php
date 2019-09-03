<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mascota;
use Faker\Generator as Faker;

$factory->define(Mascota::class, function (Faker $faker) {
    return [
        'nombre' => $faker->userName,
        'especie' => $faker->safeColorName,
        'raza' => $faker->randomLetter,
        'sexo' => $faker->boolean($chanceOfGettingTrue = 40),
        'tratamiento' => $faker->boolean($chanceOfGettingTrue = 40),
        'fecha_nacimiento' => $faker->dateTimeThisDecade($max = 'now', $timezone = null),
        'fecha_deceso' => $faker->dateTimeThisYear()
    ];
});
