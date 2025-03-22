<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->foreign('usuario_creador_id')->references('id')->on('users');
            $table->unsignedBigInteger('usuario_creador_id')->nullable();
            $table->foreign('usuario_modificador_id')->references('id')->on('users');
            $table->unsignedBigInteger('usuario_modificador_id')->nullable();
            $table->foreign('usuario_eliminador_id')->references('id')->on('users');
            $table->unsignedBigInteger('usuario_eliminador_id')->nullable();

            $table->foreign('cufd_id')->references('id')->on('cufds');
            $table->unsignedBigInteger('cufd_id')->nullable();
            $table->foreign('leyenda_factura_id')->references('id')->on('leyenda_facturas');
            $table->unsignedBigInteger('leyenda_factura_id')->nullable();
            $table->foreign('motivo_anulacion_id')->references('id')->on('motivo_anulaciones');
            $table->unsignedBigInteger('motivo_anulacion_id')->nullable();
            $table->foreign('metodo_pago_id')->references('id')->on('metodo_pagos');
            $table->unsignedBigInteger('metodo_pago_id')->nullable();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->unsignedBigInteger('producto_id')->nullable();
            $table->foreign('tipo_moneda_id')->references('id')->on('tipo_monedas');
            $table->unsignedBigInteger('tipo_moneda_id')->nullable();
            $table->foreign('tipo_documento_identidad_id')->references('id')->on('tipo_documento_identidades');
            $table->unsignedBigInteger('tipo_documento_identidad_id')->nullable();
            $table->foreign('punto_venta_id')->references('id')->on('punto_ventas');
            $table->unsignedBigInteger('punto_venta_id')->nullable();

            $table->dateTime('fecha')->nullable();
            $table->string('nit')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('numero_factura')->nullable();
            $table->string('numero_cafc')->nullable();
            $table->string('facturado')->nullable();
            $table->decimal('total', 12, 2)->nullable();
            $table->string('monto_total_subjeto_iva')->nullable();
            $table->string('descuento_adicional')->nullable();
            $table->string('cuf')->nullable();
            $table->text('producto_xml')->nullable();
            $table->string('codigo_descripcion')->nullable();
            $table->string('codigo_recepcion')->nullable();
            $table->string('codigo_transaccion')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('tipo_factura')->nullable();
            $table->string('uso_cafc')->nullable();
            $table->decimal('monto_gift_card', 12, 2)->nullable();

            $table->string('estado')->nullable();
            $table->datetime('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
