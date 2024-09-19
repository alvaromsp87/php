<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';  // Nome correto da tabela no banco de dados é "categoria"
    protected $primaryKey = 'categoria_id';  // Nome da chave primária correto
    public $timestamps = false;

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'categoria_id');  // Corrigir a chave estrangeira
    }
}
