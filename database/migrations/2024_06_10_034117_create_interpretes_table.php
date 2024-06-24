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
        Schema::create('interpretes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_genero', length: 250);
            $table->string('apellido_interprete', length: 250);
            $table->string('pais_interprete', length: 250);
            $table->string('seudonimo_interprete', length: 250);
            $table->string('imagen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interpretes');
    }
};
