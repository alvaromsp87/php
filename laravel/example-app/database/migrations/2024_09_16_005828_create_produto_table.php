<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoTable extends Migration
{
    public function up(): void
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id('produto_id');  // Chave primária
            $table->string('nome_produto', 50);  // Nome do produto
            $table->integer('quantidade');  // Quantidade de produtos
            $table->decimal('valor', 10, 2);  // Valor do produto
            $table->unsignedBigInteger('categoria_id')->nullable();  // Chave estrangeira opcional para a tabela categoria
            $table->date('data_cadastro');  // Data de cadastro
            $table->timestamps();  // Colunas created_at e updated_at

            // Definir chave estrangeira
            $table->foreign('categoria_id')->references('categoria_id')->on('categoria')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
}
