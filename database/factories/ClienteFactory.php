<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'endereco' => $this->faker->address(),
            'telefone' => $this->faker->phoneNumber(),
            'cpf' => $this->faker->unique()->numerify('###########'),
            'email' => $this->faker->safeEmail(),
            'senha' => bcrypt('password123'),  
        ];
    }
}
