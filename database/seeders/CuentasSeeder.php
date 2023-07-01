<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CuentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cuentas')->insert([
            ['user'=>'Cristobal115','password'=>Hash::make('cristobal123'),'nombre'=>'Cristóbal','apellido'=>'Carvacho Ponce','perfil_id'=>1],
            ['user'=>'Cristian115','password'=>Hash::make('cristian123'),'nombre'=>'Cristian','apellido'=>'Salinas','perfil_id'=>1],
            ['user'=>'Anilu115','password'=>Hash::make('anilu123'),'nombre'=>'Ana','apellido'=>'Rojas','perfil_id'=>2],
            ['user'=>'Catherine115','password'=>Hash::make('catherine123'),'nombre'=>'Catherine','apellido'=>'Gomez','perfil_id'=>2],
            ['user'=>'Gonzalo115','password'=>Hash::make('gonzalo123'),'nombre'=>'Gonzalo','apellido'=>'Mendoza','perfil_id'=>2],
        ]);
    }
}
