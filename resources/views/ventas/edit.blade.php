@extends('layout.app')

@section('content')
<h2>Editar Venta</h2>

<form action="{{ route('ventas>
    @csrf
    @method('PUT')

    <input type="number" name="total" value="{{ $venta->total }}"><br><br>
    <input type="date" name="fecha" value="{{ $venta->fecha }}"><br><br>

    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('ventas.index') }}">Cancelar</a>
@endsection