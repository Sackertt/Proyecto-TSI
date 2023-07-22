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
            $table->integer('id_ajuste')->autoIncrement();
            $table->boolean('tipo_ajuste');
            $table->integer('cant_ajuste',100);
            $table->string('motivo_ajuste',100);
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
