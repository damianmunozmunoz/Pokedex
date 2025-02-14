<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos')->insert([
            'nombre' => 'Normal',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Planta',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Fuego',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Agua',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Eléctrico',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Volador',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Tierra',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Roca',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Lucha',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Psiquico',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Fantasma',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Veneno',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Hielo',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Dragon',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Bicho',
            'id_generacion' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Acero',
            'id_generacion' => 2
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Siniestro',
            'id_generacion' => 2
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Hada',
            'id_generacion' => 1
        ]);
    }
}
