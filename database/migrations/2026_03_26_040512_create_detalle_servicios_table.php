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
    Schema::create('detalle_servicios', function (Blueprint $table) {
        $table->id();

        $table->foreignId('servicio_mantenimiento_id')
              ->constrained('servicio_mantenimientos');

        $table->foreignId('repuesto_id')
              ->constrained('repuestos');

        $table->integer('cantidad')
              ->check('cantidad > 0');

        $table->decimal('precio_unitario', 18, 2)
              ->check('precio_unitario >= 0');

        // Subtotal NO se persiste; lo calculamos en el modelo
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_servicios');
    }
};
