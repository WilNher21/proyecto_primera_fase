<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Estudiante;

class EstudianteFactory extends Factory
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
            'nombreAlumno'=>$this->faker->firstName,
            'apellidoAlumno'=>$this->faker->lastName,
            'identidad'=>$this->faker->unique()->numerify('####-####-#####'),
            'promedio'=>$this->faker->numberBetween(0, 100),
            'direccion'=>$this->faker->address,
            'grado_id'=>Grado::all()->random()->id
        ];
    }
}
