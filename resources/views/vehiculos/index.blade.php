@extends('layout.app')

@section('content')
<h2>Vehículos</h2>

<a href="{{ route('vehiculos.create') }}">Nuevo Vehículo

</a>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vehiculos as $vehiculo)
            <tr>
                <td>{{ $vehiculo->id }}</td>
                <td>{{ $vehiculo->marca }}</td>
                <td>{{ $vehiculo->modelo }}</td>
                <td>{{ $vehiculo->precio }}</td>
                <td>
                    <a href="{{ route('vehiculos.edit', $vehiculoction="{{ route('vehiculosyle="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection