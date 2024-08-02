<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoacaoFinancimento extends Model
{
    protected $table = 'doacao_financimentos'; // Ajuste conforme o nome real da sua tabela
    // protected $fillable = ['users_id', 'financiamentos_id', 'valores', 'comprovativo'];
    use HasFactory;
    protected $fillable = [
        'users_id',
        'financiamentos_id',
        'valores',
        'comprovativo',
        'estado'
    
    ];
}
