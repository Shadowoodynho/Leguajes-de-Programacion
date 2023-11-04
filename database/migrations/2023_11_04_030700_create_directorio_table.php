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
        Schema::create('directorio', function (Blueprint $table) {
            $table->String('codigoEntrada')->primarykey();
            $table->String('nombre');
            $table->String('apellido');
            $table->String('correo')->unique();
            $table->String('telefono');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directorio');
    }
};
