<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            GeneracionTableSeeder::class,
            TiposTableSeeder::class,
            ObjetosTableSeeder::class,
            EntrenadoresTableSeeder::class,
            EquiposTableSeeder::class,
            PokemonsTableSeeder::class
        ]);
    }
}
