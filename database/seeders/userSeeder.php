<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name'=>'Empresa1',
            'apellido'=>'123456', 
            'cedula'=>'1234567',     
            'telefono'=>'1234456', 
            'celular'=>'123456789', 
            'direccion'=>'cl 1 -1 cr 1', 
            'rol_id'=>'1', 
            'email'=>'admin@correo.com', 
            'usuario'=>'empresa1', 
            'password'=>bcrypt('admin1'),
        ]);
        $usersgsst=User::create([
            'name'=>'sgsst',
            'apellido'=>'sgsst', 
            'cedula'=>'1234567',     
            'telefono'=>'1234456', 
            'celular'=>'123456789', 
            'direccion'=>'cl 1 -1 cr 1', 
            'rol_id'=>'2', 
            'email'=>'sgsst@correo.com', 
            'usuario'=>'sgsst', 
            'password'=>bcrypt('sgsst1'),
        ]);
        $userCocola=User::create([
            'name'=>'cocola',
            'apellido'=>'cocola', 
            'cedula'=>'1234567',     
            'telefono'=>'1234456', 
            'celular'=>'123456789', 
            'direccion'=>'cl 1 -1 cr 1', 
            'rol_id'=>'2', 
            'email'=>'cocola@correo.com', 
            'usuario'=>'cocola', 
            'password'=>bcrypt('cocola1'),
        ]);
        $userCoppast=User::create([
            'name'=>'coppast',
            'apellido'=>'coppast', 
            'cedula'=>'1234567',     
            'telefono'=>'1234456', 
            'celular'=>'123456789', 
            'direccion'=>'cl 1 -1 cr 1', 
            'rol_id'=>'2', 
            'email'=>'coppast@correo.com', 
            'usuario'=>'coppast', 
            'password'=>bcrypt('coppast1'),
        ]);
        $userBe=User::create([
            'name'=>'Be',
            'apellido'=>'Be', 
            'cedula'=>'1234567',     
            'telefono'=>'1234456', 
            'celular'=>'123456789', 
            'direccion'=>'cl 1 -1 cr 1', 
            'rol_id'=>'2', 
            'email'=>'Be@correo.com', 
            'usuario'=>'Be', 
            'password'=>bcrypt('Be12345'),
        ]);
    }
}
