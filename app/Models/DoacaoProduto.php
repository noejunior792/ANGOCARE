<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoacaoProduto extends Model
{
    use HasFactory;
    protected $table = 'doacao_produtos';
    protected $fillable = [
        'users_id',
        'produtos_id',
        'doados',
        'entrega',
        'estado',
    ];
}
