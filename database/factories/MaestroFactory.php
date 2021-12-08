<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Maestro;

class MaestroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    
    public function definition()
    {
        return [
            'nombreMaestro'=>$this->faker->firstName,
            'apellidoMaestro'=>$this->faker->lastName,
            'identidadMaestro'=>$this->faker->unique()->numerify('####-####-#####'),
            'telefono'=>$this->faker->unique()->phoneNumber,
            'email'=>$this->faker->email,
            'direccion'=>$this->faker->address,
        ];
    }
}
