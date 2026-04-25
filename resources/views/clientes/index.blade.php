@extends('layout.app')

@section('title', 'Clientes')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Clientes</h5>

        <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm">
            + Nuevo Cliente
        </a>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>DNI / RTN</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th class="text-center" width="180">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nombre }} {{ $cliente->apellido }}</td>
                        <td>{{ $cliente->dni_rtn }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td class="text-center">

                            <!-- EDITAR -->
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-warning">
                                Editar
                            </a>

                            <!-- ELIMINAR -->
                            <form action="{{ route('clientes.destroy', $       method="POST"
                                  style="display:inline-block">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('¿Eliminar este cliente?')">
                                    Eliminar
                                </button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">
                            No hay clientes registrados
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
