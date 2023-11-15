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
        Schema::create('horas_esteticas', function (Blueprint $table) {
            $table->increments('id_hora');
            $table->string('rut', 10);
            $table->integer('tipo_servicio');
            $table->date('fecha_servicio');
            $table->string('hora_servicio');
            $table->integer('id_mascota');
            $table->string('estado',15)->default('En Espera');
            
            $table->foreign('id_mascota')->references('id_mascota')->on('mascotas');
            $table->foreign('rut')->references('rut')->on('usuarios');
            $table->foreign('tipo_servicio')->references('id_atencion')->on('tipos_atenciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horas_esteticas');
    }
};
