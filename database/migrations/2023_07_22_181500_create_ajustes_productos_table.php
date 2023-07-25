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
        Schema::create('ajustes_productos', function (Blueprint $table) {
            $table->increments('id_ajuste');
            $table->integer('id_producto');
        
            $table->boolean('tipo_ajuste'); // Cambiamos el tipo de dato a boolean
            $table->integer('cant_ajuste'); // Eliminamos la propiedad auto_increment de aquí
            $table->string('motivo_ajuste', 100);
        
            $table->foreign('id_producto')->references('id_producto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ajustes_productos');
    }
};
