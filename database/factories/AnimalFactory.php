<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
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
            'NOME' => $this->faker->name(),
            'IDADE'=> $this->faker->randomNumber(1),
            'DESCRICAO'=> $this->faker->text(),
            'TIPO'=> $this->faker->title(),
            'RACA'=> $this->faker->title(),
            'COMPRAVACINA'=>$this->faker->url(),
            
        ];
    }
}
