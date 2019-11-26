<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\usuario::class, 2)->create();
        factory(App\sliderprincipal::class, 10)->create();
        factory(App\calificacion::class, 5)->create();
        factory(App\categoria::class, 10)->create();
        factory(App\subcategoria::class, 30)->create();
        factory(App\marca::class, 10)->create();
        factory(App\oferta::class, 5)->create();
        factory(App\producto::class, 36)->create();
        factory(App\favorito::class, 10)->create();
    }
}
