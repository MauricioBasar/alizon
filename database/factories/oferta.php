<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\oferta;
use Faker\Generator as Faker;

$factory->define(oferta::class, function (Faker $faker) {
    return [
        'oferta' => $faker->numberBetween($min = 10, $max = 50),
    ];
});
