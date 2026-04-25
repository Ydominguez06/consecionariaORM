<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Concesionaria')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    @vite(['resources/css/app.css'])
</head>
<body>

<div class="d-flex">

    <!-- Sidebar -->
    <div class="sidebar p-3">
        <h5 class="text-white mb-4">Concesionaria</h5>

        <ul class="nav nav-pills flex-column gap-2">
            <li><a href="{{ route('home') }}" class="nav-link text-white"><i class="bi bi-house"></i> Inicio</a></li>
            <li><a href="{{ route('clientes.index') }}" class="nav-link text-white"><i class="bi bi-people"></i> Clientes</a></li>
            <li><a href="{{ route('proveedores.index') }}" class="nav-link text-white"><i class="bi bi-building"></i> Proveedores</a></li>
            <li><a href="{{ route('marcas.index') }}" class="nav-link text-white"><i class="bi bi-tags"></i> Marcas</a></li>
            <li><a href="{{ route('sucursales.index') }}" class="nav-link text-white"><i class="bi bi-geo-alt"></i> Sucursales</a></li>
        </ul>
    </div>

    <!-- Contenido -->
    <div class="content p-4 w-100">
        @yield('content')
    </div>

</div>

</body>
</html>
