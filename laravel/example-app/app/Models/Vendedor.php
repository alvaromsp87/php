<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedor';
    protected $primaryKey = 'vendedor_id';  // Certifique-se que o nome da chave primária esteja correto
    public $timestamps = false;
}
