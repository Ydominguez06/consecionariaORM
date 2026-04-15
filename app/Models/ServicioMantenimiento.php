<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ServicioMantenimiento extends Model
{
    protected $fillable = [
        'vehiculo_id',
        'cliente_id',
        'fecha_servicio',
        'tipo_servicio',
        'costo',
        'estado',
    ];

    protected $casts = [
        'fecha_servicio' => 'datetime',
        'costo'          => 'decimal:2',
    ];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function detalles()
    {
        return $this->hasMany(DetalleServicio::class);
    }
}

