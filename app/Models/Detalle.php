<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detalle extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'detalles';

    protected $fillable = [
        'usuario_creador_id',
        'usuario_modificador_id',
        'usuario_eliminador_id',
        'factura_id',
        'cliente_id',
        'producto_id',
        'punto_venta_id',
        'descripcion_adicional',
        'numero_serie',
        'numero_imei',
        'precio',
        'cantidad',
        'descuento',
        'total',
        'importe',
        'fecha',
        'estado',
        'deleted_at'
    ];
}
