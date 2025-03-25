<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    // Define qual o modelo esta Factory está associada
    protected $model = Pedido::class;

    public function definition()
    {
        // Criar um pedido
        return [
            'cliente_id' => Cliente::inRandomOrder()->first()->id,  // Pega um cliente aleatório
            'valor_total' => $this->faker->randomFloat(2, 10, 100),  // Valor total entre 10 e 100
            'valor_com_desconto' => $this->faker->randomFloat(2, 5, 90),  // Valor com desconto entre 5 e 90
            'status' => $this->faker->randomElement(['Em Aberto', 'Aguardando Preparo', 'Em Preparo', 'Em Rota de Entrega', 'Entregue']),  // Status aleatório
            'forma_pagamento' => $this->faker->randomElement(['Cartão de Crédito', 'Débito', 'Pix', 'Dinheiro']),  // Forma de pagamento aleatória
        ];
    }

    // Para associar produtos ao pedido, você pode usar o método 'afterCreating'
    public function configure()
    {
        return $this->afterCreating(function (Pedido $pedido) {
            $produtos = Produto::inRandomOrder()->take(3)->get();  // Pega até 3 produtos aleatórios
            foreach ($produtos as $produto) {
                // Adiciona os produtos ao pedido
                $pedido->produtos()->attach($produto->id, [
                    'quantidade' => rand(1, 5),  // Quantidade aleatória de 1 a 5
                    'preco' => $produto->valor,  // Preço do produto
                ]);
            }
        });
    }
}
