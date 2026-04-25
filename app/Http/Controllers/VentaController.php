<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::where('estado', 1)->get();
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        return view('ventas.create');
    }

    public function store(Request $request)
    {
        Venta::create([
            'cliente_id'   => $request->cliente_id,
            'empleado_id'  => $request->empleado_id,
            'fecha_venta'  => $request->fecha_venta,
            'tipo_venta'   => $request->tipo_venta,
            'total_venta'  => $request->total_venta,
            'estado'       => 1,
        ]);

        return redirect()->route('ventas.index');
    }

    public function edit(Venta $venta)
    {
        return view('ventas.edit', compact('venta'));
    }

    public function update(Request $request, Venta $venta)
    {
        $venta->update($request->all());
        return redirect()->route('ventas.index');
    }

    public function destroy(Venta $venta)
    {
        $venta->update(['estado' => 0]);
        return redirect()->route('ventas.index');
    }
}