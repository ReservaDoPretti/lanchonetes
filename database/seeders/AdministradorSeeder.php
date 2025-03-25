<?php

namespace Database\Seeders;

use App\Models\Administrador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Administrador::create([
            'nome' => 'Admin',
            'email' => 'admin@teste.com',
            'senha' => Hash::make('123456'),
            'role' => 'admin'
        ]);

        Administrador::create([
            'nome' => 'User',
            'email' => 'user@teste.com',
            'senha' => Hash::make('123456'),
            'role' => 'user'
        ]);
    }
}