<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financiamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'valores',
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
