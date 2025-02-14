<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pokemons')->insert([
            'nombre' => '',
            'peso' => '',
            'altura' => '',
            'genero' => '',
            'id_tipo' => '',
            'id_generacion' => '',
            'id_objeto' => '',
            'id_equipo' => '',
        ]);
    }
}
