<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Grado;

class GradoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombreGrado'=>$this->faker->unique()->randomElement
            ($array = array ('Primer Grado','Segundo Grado','Tercer Grado', 'Cuarto Grado','Quinto Grado','Sexto Grado')),
            
            'cantidadAlumnos'=>$this->faker->numberBetween($min = 10, $max = 45)
        ];
    }
}
