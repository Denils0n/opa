<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;
use App\Models\Prestador;

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
            'prestador_id' => random_int(1,2),
            'categoria_id' => Categoria::All()->random()->id,
            'hora' => $this ->faker->randomNumber(1,true),
            'preco' => $this ->faker->randomFloat(1,20,30),
            'descricao' => $this ->faker->text(),
        ];
    }
}
