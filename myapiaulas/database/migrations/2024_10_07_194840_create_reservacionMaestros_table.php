<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reservacionMaestros', function (Blueprint $table) {
            $table->integer('reservacion_id')->primary();
            $table->integer('Tarjeta')->unsigned();
            $table->string('ClaveAula', 20);
            $table->date('FechaReservacion');
            $table->time('HoraInicio');
            $table->time('HoraFin');
            $table->foreign('Tarjeta')->references('Tarjeta')->on('maestros')->onDelete('cascade');
            $table->foreign('ClaveAula')->references('ClaveAula')->on('aulas')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservacionMaestros');
    }
};
