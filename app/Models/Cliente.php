<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'clientes';

    protected $fillable = [
        'usuario_creador_id',
        'usuario_modificador_id',
        'usuario_eliminador_id',
        'nombres',
        'ap_paterno',
        'ap_materno',
        'cedula',
        'complemento',
        'nit',
        'razon_social',
        'correo',
        'numero_celular',
        'estado',
        'deleted_at'
    ];
}
