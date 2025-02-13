<?php

namespace Database\Seeders;

use App\Models\Titular;
use App\Models\User;
use App\Models\mascota;
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
        // User::factory(10)->create();
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory(60)->create(); 
        Titular::factory()->count(10)->hasMascotas(3)->create();
        //Raza::factory()->count(3)->create();
        Mascota::factory()->hasRazas(1);
        //mascota::factory()->create();
        
    }
}
