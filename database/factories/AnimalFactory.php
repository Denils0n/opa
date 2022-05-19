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
            'AN_NOME' => $this->faker->name(),
            'AN_IDADE'=> $this->faker->randomNumber(1),
            'AN_DESCRICAO'=> $this->faker->text(),
            'AN_TIPO'=> $this->faker->title(),
            'AN_RACA'=> $this->faker->title(),
            'AN_COMPRAVACINA'=>$this->faker->url(),
            
        ];
    }
}
