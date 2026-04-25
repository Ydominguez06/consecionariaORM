@extends('layout.app')

@section('content')
<h2>Empleados</h2>

<a href="{{ route('empleados.create') }}">Nuevo Empleado</a>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cargo</th>
            <th>Departamento</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>{{ $empleado->nombre }} {{ $empleado->apellido }}</td>
                <td>{{ $empleado->cargo }}</td>
                <td>{{ $empleado->departamento }}</td>
                <td>{{ $empleado->telefono }}</td>
                <td>{{ $empleado->email }}</td>
                <td>
                    <a href="{{ route('empleados.edit', $empleado->id) }}">Editar</a>

                    <form action="{{ route('empleados.destroy', $empleado->id) }}" 
                          method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<br>
<a href="{{ route('home') }}">Volver al menú</a>
@endsection