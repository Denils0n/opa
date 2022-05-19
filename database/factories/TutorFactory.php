<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'nome' => $this ->faker->name(),
           'cpf' => $this ->faker->cpf(),
           'email' => $this ->faker->email(),
           'senha' => $this ->faker->password(),
           'telefone' => $this ->faker->phoneNumber(),
           'estado' => $this ->faker->state(),
           'cidade' => $this ->faker->city(),
           'bairro' => $this ->faker->city(),
           'rua' => $this ->faker->city(),
           'numero' => $this ->faker->randomNumber(1),
           'complemento' => $this ->faker->text(),
            
    
        ];
    }
}
