<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Financiamiento extends Model
{
    protected $fillable = [
        'venta_id',
        'banco',
        'tasa_interes',
        'plazo_meses',
        'cuota_mensual',
        'estado',
    ];

    protected $casts = [
        'tasa_interes' => 'decimal:2',
        'cuota_mensual' => 'decimal:2',
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }
}
