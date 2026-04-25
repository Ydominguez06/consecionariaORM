@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
<h4 class="mb-4">Dashboard</h4>

<div class="row g-4">

    <div class="col-md-3">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <i class="bi bi-people fs-1 text-primary"></i>
                <h6 class="mt-2">Clientes</h6>
                <h4>{{ $clientes ?? 0 }}</h4>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <i class="bi bi-person-badge fs-1 text-success"></i>
                <h6 class="mt-2">Empleados</h6>
                <h4>{{ $empleados ?? 0 }}</h4>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <i class="bi bi-car-front fs-1 text-indigo"></i>
                <h6 class="mt-2">Vehículos</h6>
                <h4>{{ $vehiculos ?? 0 }}</h4>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <i class="bi bi-cash-coin fs-1 text-warning"></i>
                <h6 class="mt-2">Ventas</h6>
                <h4>{{ $ventas ?? 0 }}</h4>
            </div>
        </div>
    </div>

</div>
@endsection