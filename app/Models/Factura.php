<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Factura extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'facturas';

    protected $fillable = [
        'usuario_creador_id',
        'usuario_modificador_id',
        'usuario_eliminador_id',
        'cufd_id',
        'leyenda_factura_id',
        'motivo_anulacion_id',
        'metodo_pago_id',
        'cliente_id',
        'producto_id',
        'tipo_moneda_id',
        'tipo_documento_identidad_id',
        'punto_venta_id',
        'fecha',
        'nit',
        'razon_social',
        'numero_factura',
        'numero_cafc',
        'facturado',
        'total',
        'total',
        'monto_total_subjeto_iva',
        'descuento_adicional',
        'cuf',
        'producto_xml',
        'codigo_descripcion',
        'codigo_recepcion',
        'codigo_transaccion',
        'descripcion',
        'tipo_factura',
        'uso_cafc',
        'monto_gift_card',
        'estado',
        'deleted_at'
    ];
}
