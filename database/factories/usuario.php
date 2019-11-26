<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\usuario;
use Faker\Generator as Faker;

$factory->define(usuario::class, function (Faker $faker) {
    return [
      'nombre' => $faker->firstName,
      'apellido' => $faker->lastName,
      'email' => $faker->unique()->freeEmail,
      'contrasena' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      'foto' => $faker->image('public/storage/fotos',225,225, null, false),
      'tipodeusuario' => 'administrador',
    ];
});
