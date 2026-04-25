@extends('layout.app')

@section('content')
<h2>Nuevo Vehículo</h2>

<form action="{{ route('vehiculos.store') }}" method="POST">
    @csrf

    <input type="text" name="marca" placeholder="Marca"><br><br>
    <input type="text" name="modelo" placeholder="Modelo"><br><br>
    <input type="number" name="precio" placeholder="Precio"><br><br>

    <button type="submit">Guardar</button>
</form>

<a href="{{ route('vehiculos.index') }}">Cancelar</a>
@endsection
``