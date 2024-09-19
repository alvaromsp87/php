<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'Cliente';
    protected $primaryKey = 'cliente_id';  // Certifique-se que o nome da chave primária esteja correto
    public $timestamps = false;
}
