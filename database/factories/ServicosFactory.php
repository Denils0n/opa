<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServicosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prestador_id'=>1,
            'categria_id'=>1,

            'hora' => $this ->faker->randomNumber(1,true),
            'preco' => $this ->faker->randomFloat(1,20,30),
            'descricao' => $this ->faker->text(),
            
        
        ];
    }
}
