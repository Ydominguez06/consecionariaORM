<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class DetalleServicio extends Model
{
    protected $fillable = [
        'servicio_mantenimiento_id',
        'repuesto_id',
        'cantidad',
        'precio_unitario',
    ];

    protected $casts = [
        'precio_unitario' => 'decimal:2',
    ];

    protected $appends = ['subtotal'];

    public function servicio()
    {
        return $this->belongsTo(
            ServicioMantenimiento::class,
            'servicio_mantenimiento_id'
        );
    }

    public function repuesto()
    {
        return $this->belongsTo(Repuesto::class);
    }

    // Atributo calculado: cantidad * precio_unitario
    public function getSubtotalAttribute()
    {
        return (int) ($this->cantidad ?? 0) * (float) ($this->precio_unitario ?? 0);
    }
}
