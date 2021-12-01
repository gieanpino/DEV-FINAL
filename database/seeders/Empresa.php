<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Empresas;

class Empresa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresa1=Empresas::create([
            'name'=>'Empresa1',
            'nit'=>'123456', 
            'direccion'=>'1234567',     
            'latitud'=>'10101010', 
            'longitud'=>'101010101', 
            'actividadEconomica'=>'1', 
            'nivelRiesgo'=>'alto', 
            'cantidadEmpleados'=>'8', 
            'naturalezaJuridica'=>'1', 
            'telefono'=>'123456',
            'email'=>'Empresa1@correo.com',
            'tipoEmpresa'=>'1',
        ]);
        $empresa2=Empresas::create([
            'name'=>'Empresa2',
            'nit'=>'123456', 
            'direccion'=>'1234567',     
            'latitud'=>'10101010', 
            'longitud'=>'101010101', 
            'actividadEconomica'=>'3', 
            'nivelRiesgo'=>'alto', 
            'cantidadEmpleados'=>'10', 
            'naturalezaJuridica'=>'1', 
            'telefono'=>'123456',
            'email'=>'Empresa2@correo.com',
            'tipoEmpresa'=>'3',
        ]);
        $empresa3=Empresas::create([
            'name'=>'Empresa3',
            'nit'=>'123456', 
            'direccion'=>'1234567',     
            'latitud'=>'10101010', 
            'longitud'=>'101010101', 
            'actividadEconomica'=>'2', 
            'nivelRiesgo'=>'alto', 
            'cantidadEmpleados'=>'14', 
            'naturalezaJuridica'=>'1', 
            'telefono'=>'123456',
            'email'=>'Empresa3@correo.com',
            'tipoEmpresa'=>'2',
        ]);
        
    }
}

