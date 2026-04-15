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
    Schema::create('servicio_mantenimientos', function (Blueprint $table) {
        $table->id();

        $table->foreignId('vehiculo_id')
              ->constrained('vehiculos');

        $table->foreignId('cliente_id')
              ->constrained('clientes');

        $table->dateTime('fecha_servicio')->useCurrent();

        $table->string('tipo_servicio', 100);

        $table->decimal('costo', 18, 2)
              ->check('costo >= 0');

        $table->enum('estado', ['Abierto', 'Cerrado'])
              ->default('Cerrado');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicio_mantenimientos');
    }
};
