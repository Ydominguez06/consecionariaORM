@extends('layout.app')

@section('content')
<h2>Editar Empleado</h2>

{{ route(id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Sucursal ID</label><br>
    <input type="number" name="sucursal_id" value="{{ $empleado->sucursal_id }}"><br><br>

    <label>Nombre</label><br>
    <input type="text" name="nombre" value="{{ $empleado->nombre }}"><br><br>

    <label>Apellido</label><br>
    <input type="text" name="apellido" value="{{ $empleado->apellido }}"><br><br>

    <label>Cargo</label><br>
    <input type="text" name="cargo" value="{{ $empleado->cargo }}"><br><br>

    <label>Departamento</label><br>
    <input type="text" name="departamento" value="{{ $empleado->departamento }}"><br><br>

    <label>Teléfono</label><br>
    <input type="text" name="telefono" value="{{ $empleado->telefono }}"><br><br>

    <label>Email</label><br>
    <input type="email" name="email" value="{{ $empleado->email }}"><br><br>

    <label>Fecha de contratación</label><br>
    <input type="date" name="fecha_contratacion" value="{{ $empleado->fecha_contratacion }}"><br><br>

    <button type="submit">Actualizar</button>
</form>

<br>
<a href="{{ route('empleados.index') }}">Cancelar</a>
@endsection