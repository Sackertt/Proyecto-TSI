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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->integer('id_mascota')->autoIncrement();
            $table->string('nombre_mascota',20);
            $table->string('tamaño_mascota',10);
            $table->string('tipo_mascota',15);
            
            $table->string('rut',10);
            $table->foreign('rut')->references('rut')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
