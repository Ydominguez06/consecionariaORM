<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::where('estado', 1)->get();
        return view('proveedores.index', compact('proveedores'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_empresa' => 'required|string|max:255',
            'contacto'       => 'nullable|string|max:255',
            'telefono'       => 'required|string|max:50',
            'email'          => 'required|email|max:255',
            'direccion'      => 'nullable|string|max:255',
        ]);

        Proveedor::create([
            'nombre_empresa' => $request->nombre_empresa,
            'contacto'       => $request->contacto,
            'telefono'       => $request->telefono,
            'email'          => $request->email,
            'direccion'      => $request->direccion,
            'estado'         => 1,
        ]);

        return redirect()->route('proveedores.index');
    }

    public function edit(Proveedor $proveedor)
    {
        return view('proveedores.edit', compact('proveedor'));
    }

    public function update(Request $request, Proveedor $proveedor)
    {
        $request->validate([
            'nombre_empresa' => 'required|string|max:255',
            'contacto'       => 'nullable|string|max:255',
            'telefono'       => 'required|string|max:50',
            'email'          => 'required|email|max:255',
            'direccion'      => 'nullable|string|max:255',
        ]);

        $proveedor->update($request->only([
            'nombre_empresa',
            'contacto',
            'telefono',
            'email',
            'direccion',
        ]));

        return redirect()->route('proveedores.index');
    }

    public function destroy(Proveedor $proveedor)
    {
        $proveedor->update(['estado' => 0]);
        return redirect()->route('proveedores.index');
    }
}