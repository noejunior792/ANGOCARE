<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoacaoFinanciamentoOng extends Model
{
    use HasFactory;
    protected $table = 'doacao_financiamento_ongs';
    protected $fillable = [
        'users_id',
        'organizacaos_id',
        'users_id',
        'valores',
        'comprovativo',
        'estado',
    ];
}
