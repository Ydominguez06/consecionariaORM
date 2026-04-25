@extends('layout.app')

@section('title', 'Editar Cliente')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h5 class="mb-0">Editar Cliente</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('clientes.update', $cliente) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nombre</label>
                    <input
                        type="text"
                        name="nombre"
                        class="form-control"
                        value="{{ $cliente->nombre }}"
                        required
                    >
                </div>

                <div class="col-md-6">
                    <label class="form-label">Apellido</label>
                    <input
                        type="text"
                        name="apellido"
                        class="form-control"
                        value="{{ $cliente->apellido }}"
                        required
                    >
                </div>

                <div class="col-md-6">
                    <label class="form-label">DNI / RTN</label>
                    <input
                        type="text"
                        name="dni_rtn"
                        class="form-control"
                        value="{{ $cliente->dni_rtn }}"
                        required
                    >
                </div>

                <div class="col-md-6">
                    <label class="form-label">Teléfono</label>
                    <input
                        type="text"
                        name="telefono"
                        class="form-control"
                        value="{{ $cliente->telefono }}"
                        required
                    >
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ $cliente->email }}"
                        required
                    >
                </div>

                <div class="col-md-6">
                    <label class="form-label">Dirección</label>
                    <input
                        type="text"
                        name="direccion"
                        class="form-control"
                        value="{{ $cliente->direccion }}"
                    >
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success">
                    Actualizar
                </button>

                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection