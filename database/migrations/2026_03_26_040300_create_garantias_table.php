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
    Schema::create('garantias', function (Blueprint $table) {
        $table->id();

        $table->foreignId('vehiculo_id')
              ->constrained('vehiculos')
              ->unique(); // 1–1 real

        $table->date('fecha_inicio');
        $table->date('fecha_fin');

        $table->string('cobertura', 250);

        $table->enum('estado', ['Activa', 'Expirada', 'Anulada'])
              ->default('Activa');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garantias');
    }
};
