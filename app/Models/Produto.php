<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    protected $fillable = ['nome', 'preco'];

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'produto_pedido', 'produto_idproduto', 'pedido_idpedido');
    }
}
