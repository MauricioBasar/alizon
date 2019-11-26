<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\producto;
use Faker\Generator as Faker;

$factory->define(producto::class, function (Faker $faker) {
    return [
        'titulo' => $faker->text($maxNbChars = 30),
        'precio' => $faker->numberBetween($min = 8000, $max = 50000),
        'cuota' => $faker->numberBetween($min = 3, $max = 18),
        'imagen' => $faker->image('public/storage/productos',512,512, null, false),
        'imagen2' => $faker->image('public/storage/productos',1024,1024, null, false),
        'imagen3' => $faker->image('public/storage/productos',640,360, null, false),
        'imagen4' => $faker->image('public/storage/productos',640,640, null, false),
        'imagen5' => $faker->image('public/storage/productos',640,270, null, false),
        'minidescripcion' => $faker->text($maxNbChars = 153),
        'descripcion' => $faker->text($maxNbChars = 500),
        'categoria_id' => App\categoria::all()->random()->id,
        'subcategoria_id' => App\subcategoria::all()->random()->id,
        'marca_id' => App\marca::all()->random()->id,
        'oferta_id' => App\oferta::all()->random()->id,
        'calificacion_id' => App\calificacion::all()->random()->id,
    ];
});
