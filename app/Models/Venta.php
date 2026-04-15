<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Venta extends Model
{
    protected $fillable = [
        'cliente_id',
        'empleado_id',
        'fecha_venta',
        'tipo_venta',
        'total_venta',
        'estado',
    ];

    protected $casts = [
        'fecha_venta' => 'datetime',
        'total_venta' => 'decimal:2',
    ];

    // Relaciones
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function detalle()
    {
        return $this->hasOne(DetalleVenta::class);
    }

    // (Más adelante)
    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }

    public function financiamiento()
    {
        return $this->hasOne(Financiamiento::class);
    }

    public function seguro()
    {
        return $this->hasOne(Seguro::class);
    }
}

