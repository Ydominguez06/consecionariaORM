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
    Schema::create('compra_vehiculo_detalles', function (Blueprint $table) {
        $table->id();

        $table->foreignId('compra_vehiculo_id')
              ->constrained('compra_vehiculos');

        $table->foreignId('vehiculo_id')
              ->constrained('vehiculos')
              ->unique();

        $table->decimal('costo_unitario', 18, 2)
              ->check('costo_unitario >= 0');

        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compra_vehiculo_detalles');
    }
};
