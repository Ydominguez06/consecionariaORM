<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Pago extends Model
{
    protected $fillable = [
        'venta_id',
        'fecha_pago',
        'monto',
        'metodo_pago',
        'referencia',
    ];

    protected $casts = [
        'fecha_pago' => 'datetime',
        'monto' => 'decimal:2',
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }
}

