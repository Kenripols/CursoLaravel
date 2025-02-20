<?php

namespace Database\Factories;

use App\Models\PlacaQR;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lectura>
 */
class LecturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'celular' => $this->faker->numerify('0#########'), // Número celular ficticio
            'fechaHora' => $this->faker->dateTimeBetween('-1 year', 'now'), // Fecha aleatoria en el último año
            'PlacaQR_id' => PlacaQR::factory(), // Relación con PlacaQR
        ];
    }
}
