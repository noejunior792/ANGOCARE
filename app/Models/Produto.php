<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'produtos',
        'categoria',
        'motivo',
        'users_id',
        'estado',
        'descisao',
        'capa',
        'titulo',
        'video'
    ];
}
