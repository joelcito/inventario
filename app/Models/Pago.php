<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pago extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'pagos';

    protected $fillable = [
        'usuario_creador_id',
        'usuario_modificador_id',
        'usuario_eliminador_id',
        'factura_id',
        'caja_id',
        'monto',
        'fecha',
        'descripcion',
        'apertura_caja',
        'tipo_pago',
        'estado',
        'deleted_at'
    ];
}
