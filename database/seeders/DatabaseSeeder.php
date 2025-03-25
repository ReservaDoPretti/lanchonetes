<?php

namespace Database\Seeders;

use App\Models\Funcionario;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Chama o seeder de Funcionarios
        $this->call(ClientesSeeder::class);
        $this->call(ProdutoSeeder::class);
        $this->call(FuncionarioSeeder::class);
        $this->call(PedidoSeeder::class);

        // Cria um usuário específico
        User::factory()->create([
            'name' => 'another User',
            'email' => 'another@example.com',
        ]);
    }
}