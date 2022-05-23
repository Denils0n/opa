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
            'hora' => $this ->faker->time(),
            'preco' => $this ->faker->string(),
            'descricao' => $this ->faker->text(),
        ];
    }
}
