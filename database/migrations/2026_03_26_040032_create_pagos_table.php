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
    Schema::create('pagos', function (Blueprint $table) {
        $table->id();

        $table->foreignId('venta_id')
              ->constrained('ventas');

        $table->dateTime('fecha_pago')->useCurrent();

        $table->decimal('monto', 18, 2)
              ->check('monto > 0');

        $table->string('metodo_pago', 20);
        $table->string('referencia', 120)->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
