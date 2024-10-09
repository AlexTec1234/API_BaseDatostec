<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('horarioMaterias', function (Blueprint $table) {
            $table->integer('ClaveHorario')->primary();
            $table->integer('Tarjeta')->unsigned();
            $table->string('ClaveAula', 20);
            $table->string('ClaveGrupo', 20);
            $table->string('ClaveMateria', 20);
            $table->string('DiaSemana', 50);
            $table->time('HoraInicio');
            $table->time('HoraFin');

            $table->foreign('Tarjeta')->references('Tarjeta')->on('maestros')->onDelete('cascade');
            $table->foreign('ClaveAula')->references('ClaveAula')->on('aulas')->onDelete('cascade');
            $table->foreign('ClaveGrupo')->references('ClaveGrupo')->on('grupos')->onDelete('cascade');
            $table->foreign('ClaveMateria')->references('ClaveMateria')->on('materias')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('horarioMaterias');
    }
};

