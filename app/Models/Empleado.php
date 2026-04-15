<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'sucursal_id',
        'nombre',
        'apellido',
        'cargo',
        'departamento',
        'telefono',
        'email',
        'fecha_contratacion',
        'estado',
    ];

    public function sucursal()
    {
        return $this->belongsTo(Sucursales::class);
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }

    public function usuario()
    {
        return $this->hasOne(UsuarioSistema::class);
    }
}