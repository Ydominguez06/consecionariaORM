<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = [
        'vin',
        'modelo_vehiculo_id',
        'sucursal_id',
        'color',
        'tipo_combustible',
        'transmision',
        'precio_venta',
        'estado',
    ];

    public function modelo()
    {
        return $this->belongsTo(ModeloVehiculo::class, 'modelo_vehiculo_id');
    }

    public function sucursal()
    {
        return $this->belongsTo(Sucursales::class);
    }

    public function venta()
    {
        return $this->hasOne(DetalleVenta::class);
    }
}