<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::where('estado', 1)->get();
        return view('vehiculos.index', compact('vehiculos'));
    }

    public function create()
    {
        return view('vehiculos.create');
    }

    public function store(Request $request)
    {
        Vehiculo::create([
            'vin'               => $request->vin,
            'modelo_vehiculo_id'=> $request->modelo_vehiculo_id,
            'sucursal_id'       => $request->sucursal_id,
            'color'             => $request->color,
            'tipo_combustible'  => $request->tipo_combustible,
            'transmision'       => $request->transmision,
            'precio_venta'      => $request->precio_venta,
            'estado'            => 1,
        ]);

        return redirect()->route('vehiculos.index');
    }

    public function edit(Vehiculo $vehiculo)
    {
        return view('vehiculos.edit', compact('vehiculo'));
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        $vehiculo->update($request->all());
        return redirect()->route('vehiculos.index');
    }

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->update(['estado' => 0]);
        return redirect()->route('vehiculos.index');
    }
}
