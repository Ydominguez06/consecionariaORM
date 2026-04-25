@extends('layout.app')

@section('content')
<h2>Nueva Venta</h2>

<form action="{{ route('ventas.store') }}" method="POST">
    @csrf

    <input type="number" name="cliente_id" placeholder="ID Cliente"><br><br>
    <input type="number" name="total" placeholder="Total"><br><br>
    <input type="date" name="fecha"><br><br>

    <button type="submit">Guardar</button>
</form>

<a href="{{ route('ventas.index') }}">Cancelar</a>
@endsection