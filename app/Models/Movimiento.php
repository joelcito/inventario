<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movimiento extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'movimientos';

    protected $fillable = [
        'usuario_creador_id',
        'usuario_modificador_id',
        'usuario_eliminador_id',
        'producto_id',
        'sucursal_salida_id',
        'sucursal_recepcion_id',
        'ingreso',
        'salida',
        'fecha',
        'descripcion',
        'estado',
        'deleted_at'
    ];
}
