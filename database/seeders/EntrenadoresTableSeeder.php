<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntrenadoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('entrenadores')->insert([
            'correo' => 'admin@gmail.com',
            'nombre' => 'admin',
            'password' => 'admin',
            'nacimiento' => '1970-01-01'
        ]);
    }
}
