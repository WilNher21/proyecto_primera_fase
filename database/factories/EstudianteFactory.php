<?php

namespace Database\Factories;

use App\Models\Grado;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'nombreAlumno'=>$this->faker->firstName,
            'apellidoAlumno'=>$this->faker->lastName,
            'identidad'=>$this->faker->unique()->numerify('####-####-#####'),
            'promedio'=>$this->faker->numberBetween($min = 0, $max = 100),
            'direccion'=>$this->faker->address,
            'grados_id' => Grado::all()->random()->id
        ];
    }
}
