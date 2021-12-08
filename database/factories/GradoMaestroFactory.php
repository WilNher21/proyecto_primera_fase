<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\GradoMaestro;
use App\Models\Maestro;
use App\Models\Grado;

class GradoMaestroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'maestro_id'=>Maestro::all()->random()->id,
            'grado_id'=>Grado::all()->random()->id
        ];
    }
}
