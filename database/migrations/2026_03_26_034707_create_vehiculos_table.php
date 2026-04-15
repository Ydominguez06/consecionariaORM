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
    Schema::create('vehiculos', function (Blueprint $table) {
        $table->id();

        $table->string('vin', 17)->unique();

        $table->foreignId('modelo_vehiculo_id')
              ->constrained('modelo_vehiculos');

        $table->foreignId('sucursal_id')
              ->constrained('sucursales');

        $table->string('color', 40)->nullable();
        $table->string('tipo_combustible', 30);
        $table->string('transmision', 30);

        $table->decimal('precio_venta', 18, 2);

        $table->enum('estado', ['Disponible', 'Reservado', 'Vendido'])
              ->default('Disponible');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
