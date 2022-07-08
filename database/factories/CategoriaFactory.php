<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
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
            'nome'=>$this->faker->randomElement(["tosa", "banho", "hospedagem"])
        ];
    }
}
