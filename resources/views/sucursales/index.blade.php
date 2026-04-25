@extends('layout.app')

@section('title', 'Sucursales')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Sucursales</h5>

        <a href="{{ route('sucursales.create') }}" class="btn btn-primary btn-sm">+ Nueva Sucursal</a>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Ciudad</th>
                    <th class="text-center" width="160">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($sucursales as $sucursal)
                    <tr>
                        <td>{{ $sucursal->id }}</td>
                        <td>{{ $sucursal->nombre }}</td>
                        <td>{{ $sucursal->direccion }}</td>
                        <td>{{ $sucursal->telefono }}</td>
                        <td>{{ $sucursal->ciudad }}</td>
                        <td class="text-center">
                            <a href="{{ route('sucursales.edit', $sucursal) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('sucursales.destroy', $sucursal) }}" method="POST" style="display:inline-block; margin-left: 4px;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar esta sucursal?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">No hay sucursales registradas</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
