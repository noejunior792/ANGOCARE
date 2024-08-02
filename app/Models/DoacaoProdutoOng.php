<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoacaoProdutoOng extends Model
{
    use HasFactory;
    protected $table = 'doacao_produto_ongs';
    protected $fillable = [
        'users_id',
        'organizacaos_id',
        'users_id',
        'organizacaos_id',
        'doados',
        'entrega',
        'estado',
    ];
}
