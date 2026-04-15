<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class DetalleVenta extends Model
{
    protected $fillable = [
        'venta_id',
        'vehiculo_id',
        'precio_unitario',
        'descuento',
    ];

    protected $casts = [
        'precio_unitario' => 'decimal:2',
        'descuento'       => 'decimal:2',
    ];

    // Agregamos 'subtotal' como atributo calculado
    protected $appends = ['subtotal'];

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }

    // Accessor: subtotal = precio_unitario - descuento
    public function getSubtotalAttribute()
    {
        $precio = $this->precio_unitario ?? 0;
        $desc   = $this->descuento ?? 0;
        return (float) $precio - (float) $desc;
    }
}
