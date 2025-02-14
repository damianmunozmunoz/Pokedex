<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneracionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generacion')->insert([
            'nombre' => 'Kanto',
            'cantidad' => 151,
            'fecha_añadido' => '1996-02-27'
        ]);

        DB::table('generacion')->insert([
            'nombre' => 'Johto',
            'cantidad' => 100,
            'fecha_añadido' => '1999-11-21'
        ]);

        DB::table('generacion')->insert([
            'nombre' => 'Hoenn',
            'cantidad' => 135,
            'fecha_añadido' => '2002-11-21'
        ]);

        DB::table('generacion')->insert([
            'nombre' => 'Sinnoh',
            'cantidad' => 107,
            'fecha_añadido' => '2006-09-28'
        ]);

        DB::table('generacion')->insert([
            'nombre' => 'Teselia',
            'cantidad' => 156,
            'fecha_añadido' => '2010-09-18'
        ]);

        DB::table('generacion')->insert([
            'nombre' => 'Kalos',
            'cantidad' => 72,
            'fecha_añadido' => '2013-10-12'
        ]);
    }
}
