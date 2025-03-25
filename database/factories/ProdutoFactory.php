<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    protected $model = Produto::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->word(), // Nome do produto
            'ingredientes' => $this->faker->sentence(), // Ingredientes do produto
            'valor' => $this->faker->randomFloat(2, 5, 100), // Valor entre 5 e 100
        ];
    }
}
