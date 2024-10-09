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
        // Tabla Grupos
        Schema::create('grupos', function (Blueprint $table) {
            $table->string('ClaveGrupo', 20)->primary();
            $table->string('Nombre', 100);
            $table->string('Descripcion', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
