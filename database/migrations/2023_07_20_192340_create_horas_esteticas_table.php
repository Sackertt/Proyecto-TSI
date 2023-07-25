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
            $table->string('rut_cliente', 10);
            $table->integer('tipo_servicio');
            $table->string('nombre_mascota', 10);
            $table->string('tamaño_mascota', 10);
            $table->date('fecha_servicio');
        
            $table->foreign('rut_cliente')->references('rut_cliente')->on('clientes');
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
