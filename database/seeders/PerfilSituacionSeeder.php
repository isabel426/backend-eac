<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSituacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perfil_situacion')->insert([
            [
                'perfil_habilitacion_id'   => 1,
                'situacion_competencia_id' => 1,
                'gradiente_autonomia'      => 'autonomo', // Valor permitido por el enum
                'puntuacion_conquista'     => 85.50,
                'intentos'                 => 2,
                'fecha_conquista'          => now(),
            ],
            [
                'perfil_habilitacion_id'   => 1,
                'situacion_competencia_id' => 2,
                'gradiente_autonomia'      => 'supervisado', // Valor permitido por el enum
                'puntuacion_conquista'     => 70.00,
                'intentos'                 => 3,
                'fecha_conquista'          => now(),
            ],
        ]);
    }
}
