<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\sliderprincipal;
use Faker\Generator as Faker;

$factory->define(sliderprincipal::class, function (Faker $faker) {
    return [
        "imagen" => $faker->image('public/storage/sliderprincipal',1280,281, null, false),
    ];
});
