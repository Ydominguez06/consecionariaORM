<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();

            $table->foreignId('sucursal_id')
                  ->constrained('sucursales');

            $table->string('nombre', 80);
            $table->string('apellido', 80);

            $table->string('cargo', 80);
            $table->string('departamento', 80)->nullable();

            $table->string('telefono', 30)->nullable();
            $table->string('email', 120)->nullable();

            $table->date('fecha_contratacion');

            $table->boolean('estado')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};