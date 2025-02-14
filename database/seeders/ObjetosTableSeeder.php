<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjetosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('objetos')->insert([
            'nombre' => 'Poción',
            'descripcion' => 'Medicina en espray que cura heridas y restaura 20 PS de un Pokémon.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Superpoción',
            'descripcion' => 'Medicina en espray que cura heridas y restaura 50 PS de un Pokémon.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Hiperpoción',
            'descripcion' => 'Medicina en espray que cura heridas y restaura 200 PS de un Pokémon.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Poción Máxima',
            'descripcion' => 'Medicina en espray que cura heridas y restaura todos los PS de un Pokémon.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Antídoto',
            'descripcion' => 'Medicina en espray que cura a un Pokémon envenenado.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Antiparalizador',
            'descripcion' => 'Medicina en espray que cura la parálisis de un Pokémon.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Despertar',
            'descripcion' => 'Medicina en espray que despierta a un Pokémon dormido.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Antiquemar',
            'descripcion' => 'Medicina en espray que cura las quemaduras de un Pokémon.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Antihielo',
            'descripcion' => 'Medicina en espray que descongela a un Pokémon congelado.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Cuerda Huida',
            'descripcion' => 'Una cuerda larga y resistente. Permite escapar de cuevas o mazmorras.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Repelente',
            'descripcion' => 'Spray que mantiene alejados a los Pokémon salvajes débiles durante 100 pasos.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Superrepelente',
            'descripcion' => 'Spray que mantiene alejados a los Pokémon salvajes débiles durante 200 pasos.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Hiperrepelente',
            'descripcion' => 'Spray que mantiene alejados a los Pokémon salvajes débiles durante 250 pasos.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Poké Ball',
            'descripcion' => 'Una cápsula para atrapar Pokémon salvajes. Es el modelo básico de Poké Ball.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Super Ball',
            'descripcion' => 'Una cápsula para atrapar Pokémon salvajes. Tiene una tasa de éxito mayor que la Poké Ball.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Ultra Ball',
            'descripcion' => 'Una cápsula para atrapar Pokémon salvajes. Tiene una tasa de éxito mayor que la Super Ball.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Master Ball',
            'descripcion' => 'La mejor cápsula para atrapar Pokémon. Atrapa a cualquier Pokémon salvaje sin fallar.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Bici',
            'descripcion' => 'Una bicicleta plegable que permite moverse más rápido que a pie.'
        ]);

        DB::table('objetos')->insert([
            'nombre' => 'Mapa',
            'descripcion' => 'Un mapa detallado que muestra la región actual y la posición del usuario.'
        ]);
    }
}

