<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    protected $table = 'fornecedores';  // Corrigir o nome da tabela
    protected $primaryKey = 'fornecedor_id';  // Nome correto da chave primária
    public $timestamps = false;
}
