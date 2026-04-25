<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // LISTAR
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    // FORM CREAR
    public function create()
    {
        return view('clientes.create');
    }

    // GUARDAR
    public function store(Request $request)
    {
        $request->validate([
            'nombre'   => 'required',
            'apellido' => 'required',
            'dni_rtn'  => 'required',
            'telefono' => 'required',
            'email'    => 'required|email',
        ]);

        Cliente::create([
            'nombre'    => $request->nombre,
            'apellido'  => $request->apellido,
            'dni_rtn'   => $request->dni_rtn,
            'telefono'  => $request->telefono,
            'email'     => $request->email,
            'direccion' => $request->direccion,
            'estado'    => 1
        ]);

        return redirect()->route('clientes.index');
    }

    // FORM EDITAR
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    // ACTUALIZAR
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre'   => 'required',
            'apellido' => 'required',
            'dni_rtn'  => 'required',
            'telefono' => 'required',
            'email'    => 'required|email',
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index');
    }

    // ELIMINAR (lógico)
    public function destroy(Cliente $cliente)
    {
        $cliente->update(['estado' => 0]);
        return redirect()->route('clientes.index');
    }
}
