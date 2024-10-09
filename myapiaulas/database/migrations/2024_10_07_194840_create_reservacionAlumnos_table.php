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
        // Tabla ReservacionAlumnos
        Schema::create('reservacionAlumnos', function (Blueprint $table) {
            $table->integer('reservacion')->primary();
            $table->integer('NumeroControl')->unsigned();
            $table->integer('NumeroInventario')->unsigned();
            $table->date('FechaReservacion');
            $table->time('HoraInicio');
            $table->time('HoraFin');
            $table->foreign('NumeroControl')->references('NumeroControl')->on('alumnos');
            $table->foreign('NumeroInventario')->references('NumeroInventario')->on('computadora');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservacionAlumnos');
    }
};
