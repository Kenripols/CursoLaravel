<?php

namespace Database\Factories;

use App\Models\mascota;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlacaQR>
 */
class PlacaQRFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fechaIni' => $fechaIni = $this->faker->date(),
            'fechaFin' => date('Y-m-d', strtotime($fechaIni . ' +2 years')),
            'mascota_id' => mascota::factory(), // Se asocia una PlacaQR a la Mascota
        ];
    }
}
