<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LeyendaFactura extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'leyenda_facturas';

    protected $fillable = [
        'usuario_creador_id',
        'usuario_modificador_id',
        'usuario_eliminador_id',
        'codigo_actividad',
        'descripcion_leyenda',
        'estado',
        'deleted_at'
    ];
}
