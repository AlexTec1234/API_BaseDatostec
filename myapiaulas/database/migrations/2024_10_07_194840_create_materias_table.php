<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->string('ClaveMateria', 20)->primary();
            $table->string('ClaveCarrera', 20); // Quitar "unsigned"
            $table->string('Nombre', 100);
            $table->integer('Creditos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
