<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    // Defina os campos que podem ser preenchidos
    protected $fillable = [
        'mensagem',  // Campos que podem ser preenchidos
        // Remova 'user_id' da lista de campos obrigatórios
    ];
}
