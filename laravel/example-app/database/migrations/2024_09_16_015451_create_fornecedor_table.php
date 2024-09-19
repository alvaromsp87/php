<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaTable extends Migration
{
    public function up(): void
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->id('categoria_id');  // Chave primária
            $table->string('nome_categoria', 50);  // Nome da categoria
            $table->timestamps();  // Colunas created_at e updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categoria');
    }
}
