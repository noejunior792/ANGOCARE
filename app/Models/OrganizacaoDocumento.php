<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizacaoDocumento extends Model
{
    use HasFactory;
    protected $fillable = [
        'documento',
        'documentos_id',
        'organizacaos_id',
    ];
}
