<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Seguro extends Model
{
    protected $fillable = [
        'venta_id',
        'aseguradora',
        'numero_poliza',
        'fecha_inicio',
        'fecha_fin',
    ];

    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }
}
