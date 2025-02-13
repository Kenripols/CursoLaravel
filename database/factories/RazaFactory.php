<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Raza>
 */
class RazaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tamanio' => $this->faker->randomElement(['Chico', 'Mediano', 'Grande']), // Selecciona un valor aleatorio
            'nombreRaza' => $this->faker->randomElement(['Caniche', 'Pitbul', 'Gran Danes']), // Selecciona un valor aleatorio
        ];
    }
}
