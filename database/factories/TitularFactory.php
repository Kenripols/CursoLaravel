<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Titular>
 */
class TitularFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tiposDoc = ['Pasaporte', 'Cedula', 'Credencial'];

        return [
            'tipoDoc' => $this->faker->randomElement($tiposDoc),
            'numDoc' => $this->faker->numerify('##########'),
            'nombre1' => $this->faker->firstName(),
            'nombre2' => $this->faker->firstName(),
            'apellido1' => $this->faker->lastName(),
            'apellido2' => $this->faker->lastName(),
        ];
}
}