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
            $table->integer('id_producto')->autoIncrement();
            $table->string('nombre_producto',40);
            $table->integer('cantidad_producto');
            $table->integer('precio_producto');
            $table->string('descrip_producto',200);
            $table->integer('tipo_producto');
            $table->string('imagen_producto',100);

            // Foraneas
            
            $table->foreign('tipo_producto')->references('id_tipo')->on('tipos_productos');
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
