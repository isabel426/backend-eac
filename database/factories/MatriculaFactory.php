<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estudiante_id' => \App\Models\User::factory(),
            'modulo_id' => \App\Models\Modulo::factory(),
            'ecosistema_laboral_id' => \App\Models\EcosistemaLaboral::factory(),
            'ciclo_formativo_id' => \App\Models\CicloFormativo::factory(),
            'familia_profesional_id' => \App\Models\FamiliaProfesional::factory(),
            'fecha_matricula' => $this->faker->date(),
        ];
    }
}
