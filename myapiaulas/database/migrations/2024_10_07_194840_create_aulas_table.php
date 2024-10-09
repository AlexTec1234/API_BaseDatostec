<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAulasTable extends Migration
{
    public function up()
    {
        Schema::create('aulas', function (Blueprint $table) {
            $table->string('ClaveAula', 20)->primary();
            $table->string('ClaveEdificio', 20);
            $table->string('Nombre', 100);
            $table->timestamps();

            // Agregar la clave foránea
            $table->foreign('ClaveEdificio')->references('ClaveEdificio')->on('edificios')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('aulas');
    }
};
