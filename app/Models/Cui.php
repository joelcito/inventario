<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cui extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'cuis';

    protected $fillable = [
        'usuario_creador_id',
        'usuario_modificador_id',
        'usuario_eliminador_id',
        'punto_venta_id',
        'codigo',
        'fecha_vigencia',
        'codigo_ambiente',
        'estado',
        'deleted_at'
    ];
}
