<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::where('estado', 1)->get();
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        Empleado::create([
            'sucursal_id'        => $request->sucursal_id,
            'nombre'             => $request->nombre,
            'apellido'           => $request->apellido,
            'cargo'              => $request->cargo,
            'departamento'       => $request->departamento,
            'telefono'           => $request->telefono,
            'email'              => $request->email,
            'fecha_contratacion' => $request->fecha_contratacion,
            'estado'             => 1,
        ]);

        return redirect()->route('empleados.index');
    }

    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    public function update(Request $request, Empleado $empleado)
    {
        $empleado->update($request->all());
        return redirect()->route('empleados.index');
    }

    public function destroy(Empleado $empleado)
    {
        $empleado->update(['estado' => 0]);
        return redirect()->route('empleados.index');
    }
}