<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estudiante;
use App\Models\Maestro;
use App\Models\Grado;
use App\Models\GradoMaestro;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            //GradoSeeder::class,
            //MaestroSeeder::class,
            //EstudianteSeeder::class,
            GradoMaestroSeeder::class
            
            
        ]);
    }
}
