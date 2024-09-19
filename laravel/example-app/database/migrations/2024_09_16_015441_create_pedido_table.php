<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    public function up(): void
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->id('pedido_id');  // Chave primária
            $table->unsignedBigInteger('cliente_id')->nullable();  // Chave estrangeira para cliente
            $table->unsignedBigInteger('fornecedor_id')->nullable();  // Chave estrangeira para fornecedor
            $table->unsignedBigInteger('vendedor_id')->nullable();  // Chave estrangeira para vendedor
            $table->integer('quantidade');  // Quantidade
            $table->date('data_pedido');  // Data do pedido
            $table->timestamps();  // Colunas created_at e updated_at

            // Definir as chaves estrangeiras
            $table->foreign('cliente_id')->references('cliente_id')->on('cliente')->onDelete('set null');
            $table->foreign('fornecedor_id')->references('fornecedor_id')->on('fornecedor')->onDelete('set null');
            $table->foreign('vendedor_id')->references('vendedor_id')->on('vendedor')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
}
