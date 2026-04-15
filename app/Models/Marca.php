<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Marca extends Model
{
    protected $fillable = [
        'nombre',
        'pais_origen',
        'estado',
    ];

    public function modelos()
    {
        return $this->hasMany(ModeloVehiculo::class);
    }
}

