<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nombre' => 'admin', 
            'descripcion' => 'administrador de la pagina web'
        ]);

        DB::table('roles')->insert([
            'nombre' => 'mond', 
            'descripcion' => 'modelador de la pagina web'
        ]);
    }
}
