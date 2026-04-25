<?php
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\SucursalesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home.index');
})->name('home');

/*
|--------------------------------------------------------------------------
| Clientes
|--------------------------------------------------------------------------
*/
Route::resource('clientes', ClienteController::class);

/*
|--------------------------------------------------------------------------
| Proveedores
|--------------------------------------------------------------------------
*/
Route::resource('proveedores', ProveedorController::class);

/*
|--------------------------------------------------------------------------
| Marcas
|--------------------------------------------------------------------------
*/
Route::resource('marcas', MarcaController::class);

/*
|--------------------------------------------------------------------------
| Sucursales
|--------------------------------------------------------------------------
*/
Route::resource('sucursales', SucursalesController::class);