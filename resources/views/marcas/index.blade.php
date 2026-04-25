@extends('layout.app')

@section('title', 'Marcas')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Marcas</h5>

        <a href="{{ route('marcas.create') }}" class="btn btn-primary btn-sm">+ Nueva Marca</a>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>País de origen</th>
                    <th class="text-center" width="160">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($marcas as $marca)
                    <tr>
                        <td>{{ $marca->id }}</td>
                        <td>{{ $marca->nombre }}</td>
                        <td>{{ $marca->pais_origen }}</td>
                        <td class="text-center">
                            <a href="{{ route('marcas.edit', $marca) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('marcas.destroy', $marca) }}" method="POST" style="display:inline-block; margin-left: 4px;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar esta marca?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">No hay marcas registradas</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
