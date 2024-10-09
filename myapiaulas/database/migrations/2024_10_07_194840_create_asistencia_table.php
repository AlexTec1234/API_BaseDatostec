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
        // Tabla Asistencia
        Schema::create('asistencia', function (Blueprint $table) {
            $table->integer('asistencia_id')->primary();
            $table->integer('NumeroControl')->unsigned();
            $table->integer('ClaveHorario')->unsigned();
            $table->date('Fecha');
            $table->boolean('Asistio')->default(false);
            $table->foreign('NumeroControl')->references('NumeroControl')->on('alumnos');
            $table->foreign('ClaveHorario')->references('ClaveHorario')->on('horarioMaterias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencia');
    }
};
