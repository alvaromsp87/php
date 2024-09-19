<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendedorTable extends Migration
{
    public function up(): void
    {
        Schema::create('vendedor', function (Blueprint $table) {
            $table->id('vendedor_id');  // Chave primária
            $table->string('nome_vendedor', 50);  // Nome do vendedor
            $table->timestamps();  // Colunas created_at e updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vendedor');
    }
}
