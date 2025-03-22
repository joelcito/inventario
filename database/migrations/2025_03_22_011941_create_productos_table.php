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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->foreign('usuario_creador_id')->references('id')->on('users');
            $table->unsignedBigInteger('usuario_creador_id')->nullable();
            $table->foreign('usuario_modificador_id')->references('id')->on('users');
            $table->unsignedBigInteger('usuario_modificador_id')->nullable();
            $table->foreign('usuario_eliminador_id')->references('id')->on('users');
            $table->unsignedBigInteger('usuario_eliminador_id')->nullable();

            $table->foreign('unidad_medida_id')->references('id')->on('unidad_medidas');
            $table->unsignedBigInteger('unidad_medida_id')->nullable();
            $table->foreign('producto_servicio_id')->references('id')->on('producto_servicios');
            $table->unsignedBigInteger('producto_servicio_id')->nullable();
            $table->foreign('duenio_id')->references('id')->on('users');
            $table->unsignedBigInteger('duenio_id')->nullable();
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
            $table->unsignedBigInteger('proveedor_id')->nullable();

            $table->string('codigo')->nullable();
            $table->string('nombre')->nullable();
            $table->string('unidad')->nullable();
            $table->decimal('precio_compra', 12, 2)->nullable();
            $table->decimal('precio_venta', 12, 2)->nullable();
            $table->string('medida')->nullable();
            $table->string('cantidad_por_caja')->nullable();
            $table->decimal('equivalente', 12, 2)->nullable();
            $table->string('minimo_stock')->nullable();
            $table->string('imagen')->nullable();
            
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
        Schema::dropIfExists('productos');
    }
};
