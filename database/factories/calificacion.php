<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\calificacion;
use Faker\Generator as Faker;

$factory->define(calificacion::class, function (Faker $faker) {
    return [
        'calificacion' => $faker->numberBetween($min = 1000, $max = 9000),
    ];
});
