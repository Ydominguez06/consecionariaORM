@extends('layout.app')

@section('content')
<h2>Nuevo Empleado</h2>

<form action="{{ route('empleados.store') }}" method="POST">
    @csrf

    <label>Sucursal ID</label><br>
    <input type="number" name="sucursal_id"><br><br>

    <label>Nombre</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Apellido</label><br>
    <input type="text" name="apellido"><br><br>

    <label>Cargo</label><br>
    <input type="text" name="cargo"><br><br>

    <label>Departamento</label><br>
    <input type="text" name="departamento"><br><br>

    <label>Teléfono</label><br>
    <input type="text" name="telefono"><br><br>

    <label>Email</label><br>
    <input type="email" name="email"><br><br>

    <label>Fecha de contratación</label><br>
    <input type="date" name="fecha_contratacion"><br><br>

    <button type="submit">Guardar</button>
</form>

<br>
<a href="{{ route('empleados.index') }}">Cancelar</a>
@endsection