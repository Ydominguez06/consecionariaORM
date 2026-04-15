<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Repuesto extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'proveedor_id',
    ];

    protected $casts = [
        'precio' => 'decimal:2',
    ];

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function detallesServicio()
    {
        return $this->hasMany(DetalleServicio::class);
    }
}

