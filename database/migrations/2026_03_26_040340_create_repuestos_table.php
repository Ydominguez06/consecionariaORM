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
    Schema::create('repuestos', function (Blueprint $table) {
        $table->id();

        $table->string('nombre', 150);
        $table->string('descripcion', 250)->nullable();

        $table->decimal('precio', 18, 2)
              ->check('precio >= 0');

        $table->integer('stock')
              ->check('stock >= 0');

        $table->foreignId('proveedor_id')
              ->constrained('proveedores');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repuestos');
    }
};
