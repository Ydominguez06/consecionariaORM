<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores'; // ✅ SOLUCIÓN CLAVE

    protected $fillable = [
        'nombre_empresa',
        'contacto',
        'telefono',
        'email',
        'direccion',
        'estado',
    ];

    public function compras()
    {
        return $this->hasMany(CompraVehiculo::class);
    }

    public function repuestos()
    {
        return $this->hasMany(Repuesto::class);
    }
}