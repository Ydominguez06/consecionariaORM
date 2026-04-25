@extends('layout.app')

@section('title', 'Editar Proveedor')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h5 class="mb-0">Editar Proveedor</h5>
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

        <form action="{{ route('proveedores.update', $proveedor) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nombre de la empresa</label>
                    <input type="text" name="nombre_empresa" class="form-control" value="{{ old('nombre_empresa', $proveedor->nombre_empresa) }}" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Contacto</label>
                    <input type="text" name="contacto" class="form-control" value="{{ old('contacto', $proveedor->contacto) }}">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $proveedor->telefono) }}" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $proveedor->email) }}" required>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Dirección</label>
                    <input type="text" name="direccion" class="form-control" value="{{ old('direccion', $proveedor->direccion) }}">
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{ route('proveedores.index') }}" class="btn btn-secondary ms-2">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection