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
        // Tabla Usuarios
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('usuario_id')->primary();
            $table->string('correo', 100);
            $table->string('password', 100);
            $table->string('login', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
