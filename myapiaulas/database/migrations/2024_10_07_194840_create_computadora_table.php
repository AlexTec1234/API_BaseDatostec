<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('computadora', function (Blueprint $table) {
            $table->integer('NumeroInventario')->primary();
            $table->string('ClaveAula', 20);
            $table->string('Marca', 50);
            $table->string('Estado', 50);
            $table->foreign('ClaveAula')->references('ClaveAula')->on('aulas')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('computadora');
    }
};

