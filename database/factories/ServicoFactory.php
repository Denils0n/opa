<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hora' => $this ->faker->randomNumber(1,true),
            'preco' => $this ->faker->randomFloat(1,20,30),
            'descricao' => $this ->faker->text(),
        ];
    }
}
