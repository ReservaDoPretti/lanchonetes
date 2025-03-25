<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();                
            $table->foreignId('cliente_id')->constrained()->onDelete('cascade'); // Coluna cliente_id
            $table->decimal('valor_total', 10, 2);
            $table->decimal('valor_com_desconto', 10, 2)->nullable();
            $table->string('status');
            $table->string('forma_pagamento');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
