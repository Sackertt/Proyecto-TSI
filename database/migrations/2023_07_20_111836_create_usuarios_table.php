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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('rut',10)->primary();
            $table->string('password',200);
            $table->string('nombre',20);
            $table->string('fono',9);
            $table->string('direccion',50);
            $table->integer('id_perfil');

            $table->foreign('id_perfil')->references('id_perfil')->on('tipos_perfiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
