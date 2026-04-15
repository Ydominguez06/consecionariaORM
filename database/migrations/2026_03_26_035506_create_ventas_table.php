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
    Schema::create('ventas', function (Blueprint $table) {
        $table->id();

        $table->foreignId('cliente_id')
              ->constrained('clientes');

        $table->foreignId('empleado_id')
              ->constrained('empleados');

        // Fecha de la venta. Usamos current timestamp de la BD.
        $table->dateTime('fecha_venta')->useCurrent();

        // Tipo de venta: Contado o Financiamiento
        $table->enum('tipo_venta', ['Contado', 'Financiamiento']);

        // Total con regla de negocio (no negativo)
        $table->decimal('total_venta', 18, 2)->check('total_venta >= 0');

        // Estado del documento
        $table->enum('estado', ['Registrada', 'Facturada', 'Anulada'])
              ->default('Registrada');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
