@extends('layout.app')

@section('title', 'Nuevo Cliente')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h5 class="mb-0">Nuevo Cliente</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">DNI / RTN</label>
                    <input type="text" name="dni_rtn" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Dirección</label>
                    <input type="text" name="direccion" class="form-control">
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success">
                    Guardar
                </button>

                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection