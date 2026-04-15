<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CompraVehiculo extends Model
{
    protected $fillable = [
        'proveedor_id',
        'fecha_compra',
        'total_compra',
        'estado',
    ];

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function detalles()
    {
        return $this->hasMany(CompraVehiculoDetalle::class);
    }
}

