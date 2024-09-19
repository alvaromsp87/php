<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $primaryKey = 'produto_id';  // Nome da chave primária
    protected $table = 'produto';  // Nome correto da tabela

    protected $fillable = ['nome_produto', 'quantidade', 'valor', 'categoria_id', 'data_cadastro'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');  // chave estrangeira correta
    }
}
