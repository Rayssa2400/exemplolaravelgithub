<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',  // Permite preencher o campo user_id
        'mensagem', // Permite preencher o campo mensagem
    ];
}
