<?php

namespace App\Http\Controllers;

use App\Models\Sucursales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SucursalesController extends Controller
{
    public function index()
    {
        $sucursales = Sucursales::all();
        return view('sucursales.index', compact('sucursales'));
    }

    public function create()
    {
        return view('sucursales.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'    => 'required|string|max:255',
            'direccion' => 'nullable|string|max:255',
            'telefono'  => 'nullable|string|max:50',
            'ciudad'    => 'nullable|string|max:100',
        ]);

        Sucursales::create([
            'nombre'    => $request->nombre,
            'direccion' => $request->direccion,
            'telefono'  => $request->telefono,
            'ciudad'    => $request->ciudad,
        ]);

        return redirect()->route('sucursales.index');
    }

    public function edit(Sucursales $sucursal)
    {
        return view('sucursales.edit', compact('sucursal'));
    }

    public function update(Request $request, Sucursales $sucursal)
    {
        $request->validate([
            'nombre'    => 'required|string|max:255',
            'direccion' => 'nullable|string|max:255',
            'telefono'  => 'nullable|string|max:50',
            'ciudad'    => 'nullable|string|max:100',
        ]);

        $sucursal->update($request->only(['nombre', 'direccion', 'telefono', 'ciudad']));

        return redirect()->route('sucursales.index');
    }

    public function destroy(Sucursales $sucursal)
    {
        $sucursal->delete();
        return redirect()->route('sucursales.index');
    }

    public function getColumns()
    {
        return DB::select('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = "sucursales"');
    }
}
