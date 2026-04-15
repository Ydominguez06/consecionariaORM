<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Sucursales extends Model
{
    protected $fillable = [
        'nombre_sucursal',
        'direccion',
        'telefono',
        'ciudad',
        'estado',
    ];

    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}

