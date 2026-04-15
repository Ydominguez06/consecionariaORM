<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Garantia extends Model
{
    protected $fillable = [
        'vehiculo_id',
        'fecha_inicio',
        'fecha_fin',
        'cobertura',
        'estado',
    ];

    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
    ];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}