<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CuentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            ['rut'=>"21549601-5",'password' =>Hash::make('Admin1234'),'nombre'=>'Joaquin','fono'=>'912345678','direccion'=>'Casa Admin','id_perfil'=>1],
            ['rut'=>"22430508-7",'password' =>Hash::make('Usuario1234'),'nombre'=>'Jonas','fono'=>'987654321','direccion'=>'Casa Usuario','id_perfil'=>2],
            ['rut'=>"21603763-3",'password' =>Hash::make('Felipe1234'),'nombre'=>'Felipe','fono'=>'916238294','direccion'=>'Casa Felipe','id_perfil'=>2],  
        ]);
    }
}
