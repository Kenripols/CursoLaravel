<?php

namespace Database\Factories;

use App\Models\Mascota;
use App\Models\Titular;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mascota>
 */
class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'foto' => $this->faker->imageUrl(),
            'nombre' => $this->faker->firstName(),
            'tipo' => $this->faker->word,
            'fechaNac' => $this->faker->date(),
            'idRaza' => $this->faker->numberBetween(1, 10), // Asegúrate de que exista alguna raza en tu base de datos
            'idTitular' => Titular::factory(), // Aquí se asocia un Titular a la Mascota
        ];
    }
}
