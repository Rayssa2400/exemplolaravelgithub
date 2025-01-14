<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoPedido extends Model
{
    use HasFactory;

    protected $table = 'produto_pedido';
    protected $fillable = ['pedido_idpedido', 'produto_idproduto', 'quantidade'];
}
