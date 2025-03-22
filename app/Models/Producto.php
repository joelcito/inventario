<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'productos';

    protected $fillable = [
        'usuario_creador_id',
        'usuario_modificador_id',
        'usuario_eliminador_id',
        'unidad_medida_id',
        'producto_servicio_id',
        'duenio_id',
        'proveedor_id',
        'codigo',
        'nombre',
        'unidad',
        'precio_compra',
        'precio_venta',
        'medida',
        'cantidad_por_caja',
        'equivalente',
        'minimo_stock',
        'imagen',
        'estado',
        'deleted_at'
    ];
}
