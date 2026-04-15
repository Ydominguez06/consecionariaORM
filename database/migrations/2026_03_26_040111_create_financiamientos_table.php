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
    Schema::create('financiamientos', function (Blueprint $table) {
        $table->id();

        $table->foreignId('venta_id')
              ->constrained('ventas')
              ->unique();

        $table->string('banco', 120);
        $table->decimal('tasa_interes', 5, 2)
              ->check('tasa_interes >= 0');

        $table->integer('plazo_meses')
              ->check('plazo_meses > 0');

        $table->decimal('cuota_mensual', 18, 2)
              ->check('cuota_mensual >= 0');

        $table->enum('estado', ['Vigente', 'Cancelado'])
              ->default('Vigente');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financiamientos');
    }
};
