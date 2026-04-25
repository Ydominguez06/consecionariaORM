<?php

namespace App\Console\Commands;

use App\Models\Cliente;
use App\Models\Proveedor;
use App\Models\Marca;
use Illuminate\Console\Command;

class DemoScript extends Command
{
    protected $signature = 'demo:script';
    protected $description = 'Script de demostración: CRUD en Clientes, Proveedores y Marcas';

    public function handle()
    {
        $this->info('========================================');
        $this->info('SCRIPT DE DEMOSTRACIÓN DE BASE DE DATOS');
        $this->info('========================================');
        $this->newLine();

        // ==================== CLIENTES ====================
        $this->info('📋 TABLA: CLIENTES');
        $this->info('─────────────────────────────────────────');

        $this->info('✅ INSERT: Agregando 5 clientes...');
        $clientes = [
            ['nombre' => 'Juan', 'apellido' => 'Pérez', 'dni_rtn' => '0801199512345', 'telefono' => '98765432', 'email' => 'juan@example.com', 'direccion' => 'Calle 1, Tegucigalpa'],
            ['nombre' => 'María', 'apellido' => 'López', 'dni_rtn' => '0802198654321', 'telefono' => '97654321', 'email' => 'maria@example.com', 'direccion' => 'Calle 2, Tegucigalpa'],
            ['nombre' => 'Carlos', 'apellido' => 'González', 'dni_rtn' => '0803197789456', 'telefono' => '96543210', 'email' => 'carlos@example.com', 'direccion' => 'Calle 3, Tegucigalpa'],
            ['nombre' => 'Ana', 'apellido' => 'Martínez', 'dni_rtn' => '0804196852147', 'telefono' => '95432109', 'email' => 'ana@example.com', 'direccion' => 'Calle 4, Tegucigalpa'],
            ['nombre' => 'Pedro', 'apellido' => 'Sánchez', 'dni_rtn' => '0805195963258', 'telefono' => '94321098', 'email' => 'pedro@example.com', 'direccion' => 'Calle 5, Tegucigalpa'],
        ];

        foreach ($clientes as $cliente) {
            Cliente::create(array_merge($cliente, ['estado' => 1]));
        }
        $this->line('   → 5 clientes creados exitosamente');

        $this->newLine();
        $this->info('🔍 CONSULTA 1: Listar todos los clientes');
        $allClientes = Cliente::all();
        foreach ($allClientes as $cliente) {
            $this->line("   ID: {$cliente->id} | {$cliente->nombre} {$cliente->apellido} | {$cliente->email}");
        }

        $this->newLine();
        $this->info('🔍 CONSULTA 2: Filtrar cliente por DNI (0801199512345)');
        $clienteFiltered = Cliente::where('dni_rtn', '0801199512345')->first();
        if ($clienteFiltered) {
            $this->line("   → Encontrado: {$clienteFiltered->nombre} {$clienteFiltered->apellido} | Teléfono: {$clienteFiltered->telefono}");
        }

        $this->newLine();
        $this->info('✏️  UPDATE 1: Actualizar teléfono de Juan Pérez');
        $juan = Cliente::where('nombre', 'Juan')->first();
        $juan->update(['telefono' => '99999999']);
        $this->line("   → Teléfono actualizado a: {$juan->telefono}");

        $this->newLine();
        $this->info('✏️  UPDATE 2: Actualizar email de María López');
        $maria = Cliente::where('nombre', 'María')->first();
        $maria->update(['email' => 'maria.nueva@example.com']);
        $this->line("   → Email actualizado a: {$maria->email}");

        $this->newLine();
        $this->info('🗑️  DELETE 1: Eliminar cliente Pedro Sánchez');
        $pedro = Cliente::where('nombre', 'Pedro')->first();
        $pedro->delete();
        $this->line("   → Cliente eliminado");

        $this->newLine();
        $this->info('🗑️  DELETE 2: Eliminar cliente Ana Martínez');
        $ana = Cliente::where('nombre', 'Ana')->first();
        $ana->delete();
        $this->line("   → Cliente eliminado");

        $this->newLine();
        $this->info('📊 Clientes restantes después de deletes:');
        $clientesRestantes = Cliente::all();
        $this->line("   → Total: {$clientesRestantes->count()} clientes");

        // ==================== PROVEEDORES ====================
        $this->newLine();
        $this->info('📋 TABLA: PROVEEDORES');
        $this->info('─────────────────────────────────────────');

        $this->info('✅ INSERT: Agregando 5 proveedores...');
        $proveedores = [
            ['nombre_empresa' => 'Toyota Honduras', 'contacto' => 'Juan Distribuidor', 'telefono' => '22345678', 'email' => 'toyota@example.com', 'direccion' => 'Zona Industrial, Tegucigalpa'],
            ['nombre_empresa' => 'Honda SA', 'contacto' => 'Miguel Ventas', 'telefono' => '22456789', 'email' => 'honda@example.com', 'direccion' => 'Blvd Los Próceres, Tegucigalpa'],
            ['nombre_empresa' => 'Nissan Distribuidora', 'contacto' => 'Roberto Comercial', 'telefono' => '22567890', 'email' => 'nissan@example.com', 'direccion' => 'Carretera Oeste, Tegucigalpa'],
            ['nombre_empresa' => 'Hyundai Center', 'contacto' => 'Luis Ejecutivo', 'telefono' => '22678901', 'email' => 'hyundai@example.com', 'direccion' => 'Centro Comercial, Tegucigalpa'],
            ['nombre_empresa' => 'Mazda Motors', 'contacto' => 'Fernando Gerente', 'telefono' => '22789012', 'email' => 'mazda@example.com', 'direccion' => 'Av. La Paz, Tegucigalpa'],
        ];

        foreach ($proveedores as $proveedor) {
            Proveedor::create(array_merge($proveedor, ['estado' => 1]));
        }
        $this->line('   → 5 proveedores creados exitosamente');

        $this->newLine();
        $this->info('🔍 CONSULTA 1: Listar todos los proveedores');
        $allProveedores = Proveedor::all();
        foreach ($allProveedores as $prov) {
            $this->line("   ID: {$prov->id} | {$prov->nombre_empresa} | {$prov->email}");
        }

        $this->newLine();
        $this->info('🔍 CONSULTA 2: Filtrar proveedor por nombre (Toyota Honduras)');
        $toyotaProv = Proveedor::where('nombre_empresa', 'Toyota Honduras')->first();
        if ($toyotaProv) {
            $this->line("   → Encontrado: {$toyotaProv->nombre_empresa} | Contacto: {$toyotaProv->contacto}");
        }

        $this->newLine();
        $this->info('✏️  UPDATE 1: Actualizar teléfono de Toyota Honduras');
        $toyota = Proveedor::where('nombre_empresa', 'Toyota Honduras')->first();
        $toyota->update(['telefono' => '22111111']);
        $this->line("   → Teléfono actualizado a: {$toyota->telefono}");

        $this->newLine();
        $this->info('✏️  UPDATE 2: Actualizar email de Honda SA');
        $honda = Proveedor::where('nombre_empresa', 'Honda SA')->first();
        $honda->update(['email' => 'contacto.honda@example.com']);
        $this->line("   → Email actualizado a: {$honda->email}");

        $this->newLine();
        $this->info('🗑️  DELETE 1: Eliminar proveedor Mazda Motors');
        $mazda = Proveedor::where('nombre_empresa', 'Mazda Motors')->first();
        $mazda->delete();
        $this->line("   → Proveedor eliminado");

        $this->newLine();
        $this->info('🗑️  DELETE 2: Eliminar proveedor Hyundai Center');
        $hyundai = Proveedor::where('nombre_empresa', 'Hyundai Center')->first();
        $hyundai->delete();
        $this->line("   → Proveedor eliminado");

        $this->newLine();
        $this->info('📊 Proveedores restantes después de deletes:');
        $proveedoresRestantes = Proveedor::all();
        $this->line("   → Total: {$proveedoresRestantes->count()} proveedores");

        // ==================== MARCAS ====================
        $this->newLine();
        $this->info('📋 TABLA: MARCAS');
        $this->info('─────────────────────────────────────────');

        $this->info('✅ INSERT: Agregando 5 marcas...');
        $marcas = [
            ['nombre' => 'Toyota', 'pais_origen' => 'Japón'],
            ['nombre' => 'Honda', 'pais_origen' => 'Japón'],
            ['nombre' => 'Nissan', 'pais_origen' => 'Japón'],
            ['nombre' => 'Hyundai', 'pais_origen' => 'Corea del Sur'],
            ['nombre' => 'Mazda', 'pais_origen' => 'Japón'],
        ];

        foreach ($marcas as $marca) {
            Marca::create(array_merge($marca, ['estado' => 1]));
        }
        $this->line('   → 5 marcas creadas exitosamente');

        $this->newLine();
        $this->info('🔍 CONSULTA 1: Listar todas las marcas');
        $allMarcas = Marca::all();
        foreach ($allMarcas as $marca) {
            $this->line("   ID: {$marca->id} | {$marca->nombre} | País: {$marca->pais_origen}");
        }

        $this->newLine();
        $this->info('🔍 CONSULTA 2: Filtrar marcas por país (Japón)');
        $marcasJapon = Marca::where('pais_origen', 'Japón')->get();
        $this->line("   → Marcas encontradas: {$marcasJapon->count()}");
        foreach ($marcasJapon as $marca) {
            $this->line("      • {$marca->nombre}");
        }

        $this->newLine();
        $this->info('✏️  UPDATE 1: Actualizar país de origen de Mazda');
        $mazda_marca = Marca::where('nombre', 'Mazda')->first();
        $mazda_marca->update(['pais_origen' => 'Japón - Actualizado']);
        $this->line("   → País actualizado a: {$mazda_marca->pais_origen}");

        $this->newLine();
        $this->info('✏️  UPDATE 2: Actualizar nombre de Hyundai');
        $hyundai_marca = Marca::where('nombre', 'Hyundai')->first();
        $hyundai_marca->update(['nombre' => 'Hyundai Motors']);
        $this->line("   → Nombre actualizado a: {$hyundai_marca->nombre}");

        $this->newLine();
        $this->info('🗑️  DELETE 1: Eliminar marca Mazda');
        $marcaMazda = Marca::where('nombre', 'Mazda')->first();
        $marcaMazda->delete();
        $this->line("   → Marca eliminada");

        $this->newLine();
        $this->info('🗑️  DELETE 2: Eliminar marca Hyundai Motors');
        $marcaHyundai = Marca::where('nombre', 'Hyundai Motors')->first();
        $marcaHyundai->delete();
        $this->line("   → Marca eliminada");

        $this->newLine();
        $this->info('📊 Marcas restantes después de deletes:');
        $marcasRestantes = Marca::all();
        $this->line("   → Total: {$marcasRestantes->count()} marcas");

        // ==================== RESUMEN FINAL ====================
        $this->newLine();
        $this->info('========================================');
        $this->info('✅ SCRIPT DE DEMOSTRACIÓN COMPLETADO');
        $this->info('========================================');
        $this->newLine();
        $this->info('📊 RESUMEN FINAL:');
        $this->line("   • Clientes: " . Cliente::count() . " registros");
        $this->line("   • Proveedores: " . Proveedor::count() . " registros");
        $this->line("   • Marcas: " . Marca::count() . " registros");
        $this->newLine();
    }
}
