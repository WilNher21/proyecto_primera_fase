<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GradoMaestro;

class GradoMaestroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GradoMaestro::Factory(20)->create();

        
    }
}
