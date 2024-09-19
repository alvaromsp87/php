<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $primaryKey = 'pedido_id';
    public $timestamps = false;

    public function cliente()
    {
        return $this->belongsTo(cliente::class, 'cliente_id');
    }

    public function vendedor()
    {
        return $this->belongsTo(vendedor::class, 'vendedor_id');
    }
}
