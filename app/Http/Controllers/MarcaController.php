<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::all();
        return view('marcas.index', compact('marcas'));
    }

    public function create()
    {
        return view('marcas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'      => 'required|string|max:255',
            'pais_origen' => 'nullable|string|max:255',
        ]);

        Marca::create([
            'nombre'      => $request->nombre,
            'pais_origen' => $request->pais_origen,
        ]);

        return redirect()->route('marcas.index');
    }

    public function edit(Marca $marca)
    {
        return view('marcas.edit', compact('marca'));
    }

    public function update(Request $request, Marca $marca)
    {
        $request->validate([
            'nombre'      => 'required|string|max:255',
            'pais_origen' => 'nullable|string|max:255',
        ]);

        $marca->update($request->only(['nombre', 'pais_origen']));

        return redirect()->route('marcas.index');
    }

    public function destroy(Marca $marca)
    {
        $marca->delete();
        return redirect()->route('marcas.index');
    }
}
