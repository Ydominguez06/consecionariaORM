<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompraVehiculoDetalle extends Model
{
    protected $fillable = [
        'compra_vehiculo_id',
        'vehiculo_id',
        'costo_unitario',
    ];

    public function compra()
    {
        return $this->belongsTo(CompraVehiculo::class, 'compra_vehiculo_id');
    }

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}

