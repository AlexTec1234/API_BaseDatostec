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
        // Tabla CargaAcademicaDetalles
        Schema::create('CargaAcademicaDetalles', function (Blueprint $table) {
            $table->integer('id_detalle')->primary();
            $table->integer('ClaveHorario')->unsigned();
            $table->integer('id_general')->unsigned();
            $table->foreign('ClaveHorario')->references('ClaveHorario')->on('horarioMaterias');
            $table->foreign('id_general')->references('id_general')->on('cargaAcademicaGeneral');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargaAcademicaDetalles');
    }
};
