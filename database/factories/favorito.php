<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\favorito;
use Faker\Generator as Faker;

$factory->define(favorito::class, function (Faker $faker) {
    return [
      'producto_id' => App\producto::all()->random()->id,
      'usuario_id' => App\usuario::all()->random()->id,
    ];
});
