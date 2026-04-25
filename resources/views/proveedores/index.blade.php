@extends('layout.app')

@section('title', 'Proveedores')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Proveedores</h5>

        <a href="{{ route('proveedores.create') }}" class="btn btn-primary btn-sm">+ Nuevo Proveedor</a>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre de la empresa</th>
                    <th>Contacto</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th class="text-center" width="160">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($proveedores as $proveedor)
                    <tr>
                        <td>{{ $proveedor->id }}</td>
                        <td>{{ $proveedor->nombre_empresa }}</td>
                        <td>{{ $proveedor->contacto }}</td>
                        <td>{{ $proveedor->telefono }}</td>
                        <td>{{ $proveedor->email }}</td>
                        <td class="text-center">
                            <a href="{{ route('proveedores.edit', $proveedor) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('proveedores.destroy', $proveedor) }}" method="POST" style="display:inline-block; margin-left: 4px;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este proveedor?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">No hay proveedores registrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection