<?php

namespace Database\Factories;

use App\Models\Funcionario;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuncionarioFactory extends Factory
{
    protected $model = Funcionario::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name(), // Nome do funcionário
            'cpf' => $this->faker->unique()->numerify('###########'),
            'email' => $this->faker->safeEmail(), 
            'senha' => bcrypt('senha123'), // Senha criptografada
        ];
    }
}