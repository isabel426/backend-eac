<?php

namespace Database\Factories;

use App\Models\Modulo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Modulo>
 */
class ModuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ciclo_formativo_id' => \App\Models\CicloFormativo::factory(),
            'nombre' => $this->faker->sentence(3),
            'codigo' => $this->faker->unique()->bothify('??-###'),
            'horas_totales' => $this->faker->numberBetween(100, 300),
            'descripcion' => $this->faker->paragraph(),
        ];
    }
}
