<?php

namespace Database\Seeders;

use App\Models\lectura;
use App\Models\Titular;
use App\Models\User;
use App\Models\mascota;
use App\Models\PlacaQR;
use App\Models\Raza;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        //Creo 60 usuarios
        User::factory(60)->create(); 

        // Crear Razas antes de Mascotas para evitar errores de clave foránea
    $razas = Raza::factory()->count(3)->create();

    // Crear 10 titulares, cada uno con 3 mascotas
    Titular::factory(10)->create()->each(function ($titular) use ($razas) {
        // Cada titular tendrá 3 mascotas
        $mascotas = Mascota::factory(3)->create([
            'titular_id' => $titular->id,
            'idRaza' => $razas->random()->id, // Asigna una raza aleatoria
        ]);

        // A cada mascota se le genera una Placa QR
        foreach ($mascotas as $mascota) {
            PlacaQR::factory()->create([
                'mascota_id' => $mascota->id,
            ]);
        }
         
    });
        
        
    }
}
