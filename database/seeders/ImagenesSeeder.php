<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('imagenes')->insert([
            ['titulo'=>'','archivo'=>'','baneada'=>false,'motivo_ban'=>null,'cuenta_user'=>'Catherine115'],
            ['titulo'=>'','archivo'=>'','baneada'=>false,'motivo_ban'=>null,'cuenta_user'=>'Catherine115'],
            ['titulo'=>'','archivo'=>'','baneada'=>false,'motivo_ban'=>null,'cuenta_user'=>'Gonzalo115'],
            ['titulo'=>'','archivo'=>'','baneada'=>false,'motivo_ban'=>null,'cuenta_user'=>'Gonzalo115'],
            ['titulo'=>'','archivo'=>'','baneada'=>false,'motivo_ban'=>null,'cuenta_user'=>'Anilu'],
            ['titulo'=>'','archivo'=>'','baneada'=>false,'motivo_ban'=>null,'cuenta_user'=>'Anilu'],
        ]);
    }
}
