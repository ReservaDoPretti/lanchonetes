<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoProdutoTable extends Migration
{
    public function up()
    {
        Schema::create('pedido_produto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->constrained()->onDelete('cascade'); // Relacionamento com pedido
            $table->foreignId('produto_id')->constrained()->onDelete('cascade'); // Relacionamento com produto
            $table->integer('quantidade'); // Quantidade do produto no pedido
            $table->decimal('preco', 10, 2); // Preço do produto no pedido
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedido_produto');
    }
}
