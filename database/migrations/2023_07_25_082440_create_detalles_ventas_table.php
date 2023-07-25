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
        Schema::create('detalles_ventas', function (Blueprint $table) {
            $table->integer('id_venta');
            $table->date('fecha_venta');
            $table->integer('id_producto');
            $table->primary(['id_venta','fecha_venta','id_producto']);

            $table->integer('cantidad_producto');
            $table->integer('subtotal');

            $table->foreign('id_venta')->references('id_venta')->on('ventas');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_ventas');
    }
};
