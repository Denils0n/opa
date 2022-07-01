<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrestadorFactory extends Factory
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
            'CPF/CNPJ' => $this->faker->cpf(),
            'nome' => $this->faker->name(),
            'estado' => $this->faker->city(),
            'cidade' => $this->faker->city(),
            'bairro' => $this->faker->city(),
            'rua' => $this->faker->city(),
            'numero' => $this->faker->randomNumber(),
            'complemento' => $this->faker->text(),
            'celular'=> $this->faker->phoneNumber()
        ];
    }
}
