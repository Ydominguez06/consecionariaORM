@extends('layout.app')

@section('title', 'Editar Sucursal')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h5 class="mb-0">Editar Sucursal</h5>
    </div>

    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('sucursales.update', $sucursal) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nombre de la sucursal</label>
                    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $sucursal->nombre) }}" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $sucursal->telefono) }}">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Dirección</label>
                    <input type="text" name="direccion" class="form-control" value="{{ old('direccion', $sucursal->direccion) }}">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Ciudad</label>
                    <input type="text" name="ciudad" class="form-control" value="{{ old('ciudad', $sucursal->ciudad) }}">
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{ route('sucursales.index') }}" class="btn btn-secondary ms-2">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
