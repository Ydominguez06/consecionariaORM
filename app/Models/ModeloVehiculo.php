<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModeloVehiculo extends Model
{
    protected $fillable = [
        'marca_id',
        'nombre_modelo',
        'anio',
        'tipo_vehiculo',
        'estado',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}