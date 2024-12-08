<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';
    protected $fillable = ['data', 'valor_total', 'funcionario_idfuncionario', 'cliente_idcliente'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_idcliente', 'cpf');
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_idfuncionario', 'idfuncionario');
    }

    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'produto_pedido', 'pedido_idpedido', 'produto_idproduto');
    }

}
