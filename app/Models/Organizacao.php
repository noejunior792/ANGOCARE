<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizacao extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'nome',
        'logotipo',
        'descricao',
        'estado',
    ];
}
