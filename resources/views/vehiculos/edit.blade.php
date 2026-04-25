@extends('layout.app')

@section('content')
<h2>Editar Vehículo</h2>

<form action="{{ route('vehiculos.update',    @method('PUT')

    <input type="text" name="marca" value="{{ $vehiculo->marca }}"><br><br>
    <input type="text" name="modelo" value="{{ $vehiculo->modelo }}"><br><br>
    <input type="number" name="precio" value="{{ $vehiculo->precio }}"><br><br>

    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('vehiculos.index') }}">Cancelar</a>
@endsection