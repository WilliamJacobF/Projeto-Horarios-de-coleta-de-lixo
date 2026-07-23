<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\horario>
 */
class horarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'nomeRua' => fake()->streetName(),
        'primeiro dia' => now()->locale('pt_BR')->dayName,
        'primeiro horario' => fake()->time(),
        'segundo dia' => now()->locale('pt_BR')->dayName,
        'segundo horario' => fake()->time(),
        'terceiro dia' => now()->locale('pt_BR')->dayName,
        'terceiro horario' => fake()->time(),
        ];
    }
}