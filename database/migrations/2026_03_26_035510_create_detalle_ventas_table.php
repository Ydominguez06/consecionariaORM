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
    Schema::create('detalle_ventas', function (Blueprint $table) {
        $table->id();

        $table->foreignId('venta_id')
              ->constrained('ventas');

        $table->foreignId('vehiculo_id')
              ->constrained('vehiculos')
              // Un vehículo solo puede aparecer una vez en detalles (se vende una vez)
              ->unique();

        $table->decimal('precio_unitario', 18, 2)->check('precio_unitario >= 0');
        $table->decimal('descuento', 18, 2)->default(0)->check('descuento >= 0');

        // No persistimos subtotal: lo calculamos en el modelo con accessor
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ventas');
    }
};
