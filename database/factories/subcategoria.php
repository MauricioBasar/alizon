<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\subcategoria;
use Faker\Generator as Faker;

$factory->define(subcategoria::class, function (Faker $faker) {
    return [
        'subcategoria' => $faker->word,
        'categoria_id' => App\categoria::all()->random()->id,
    ];
});
