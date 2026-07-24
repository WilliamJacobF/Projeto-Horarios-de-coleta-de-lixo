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
        'primeiro_dia' => fake()->dayOfWeek(),
        'primeiro_horario' => fake()->time(),
        'segundo_dia' => fake()->dayOfWeek(),
        'segundo_horario' => fake()->time(),
        'terceiro_dia' => fake()->dayOfWeek(),
        'terceiro_horario' => fake()->time(),
        ];
    }
}