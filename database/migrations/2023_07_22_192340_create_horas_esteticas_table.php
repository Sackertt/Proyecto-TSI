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
            $table->integer('id_hora')->autoIncrement();
            $table->string('rut_cliente',10);
            $table->tinyInteger('tipo_servicio');
            $table->string('nombre_mascota',10);
            $table->tinyInteger('tamaño_mascota');
            $table->date('fecha_servicio');
            $table->timestamps();
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
