@extends('layout.app')

@section('content')
<h2>Ventas</h2>

<a href="{{ route('ventas.create') }}">Nueva Venta</a>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Total</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ventas as $venta)
            <tr>
                <td>{{ $venta->id }}</td>
                <td>{{ $venta->cliente->nombre ?? 'N/A' }}</td>
                <td>{{ $venta->total }}</td>
                <td>{{ $venta->fecha }}</td>
                <td>
                    <a href="{{ route('ventas.edit', $/td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
