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
    Schema::create('sucursales', function (Blueprint $table) {
        $table->id();
        $table->string('nombre_sucursal', 120);
        $table->string('direccion', 250)->nullable();
        $table->string('telefono', 30)->nullable();
        $table->string('ciudad', 80)->nullable();
        $table->boolean('estado')->default(true);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sucursales');
    }
};
