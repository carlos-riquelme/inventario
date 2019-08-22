<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'codigo_barras' => $faker->ean13,
        'proveedor' => $faker->company,
        'familia' => $faker->word,
        'categoria' => $faker->word,
        'stock_minimo' => $faker->randomDigit,
        'stock' => $faker->randomDigit,
        'vigente' => $faker->boolean,
        'presentacion' => $faker->word,
        'SKU' => $faker->randomNumber,
        'descripcion' => $faker->text,
        'detalles' => $faker->text,
        'precio' => $faker->numberBetween($min = 1000, $max = 9000),
        'receta' => $faker->boolean,
        'fecha_exp' => $faker->dateTimeThisYear,
    ];
});
