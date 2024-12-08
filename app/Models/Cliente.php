<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // A tabela associada ao modelo
    protected $table = 'clientes';

    // Defina os campos que podem ser preenchidos
    protected $fillable = [
        'cpf',
        'nome',
        'email',
        'telefone',
        'senha' // Adicionado para armazenar a senha
    ];

    // Habilitar timestamps automáticos
    public $timestamps = true;

    // Criptografar a senha automaticamente
    protected function setSenhaAttribute($value)
    {
        $this->attributes['senha'] = bcrypt($value);
    }
}
