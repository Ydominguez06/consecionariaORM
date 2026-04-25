@extends('layout.app')

@section('title', 'Editar Marca')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h5 class="mb-0">Editar Marca</h5>
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

        <form action="{{ route('marcas.update', $marca) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $marca->nombre) }}" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">País de origen</label>
                    <input type="text" name="pais_origen" class="form-control" value="{{ old('pais_origen', $marca->pais_origen) }}">
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{ route('marcas.index') }}" class="btn btn-secondary ms-2">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
