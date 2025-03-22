<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UrlApiServicio extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tipo_monedas';

    protected $fillable = [
        'usuario_creador_id',
        'usuario_modificador_id',
        'usuario_eliminador_id',
        'ambiente',
        'modalidad',
        'nombre',
        'url_servicio',
        'estado',
        'deleted_at'
    ];
}
