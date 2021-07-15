<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleAsignadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('roles_asignados')->insert([
            'user_id' => '1', 
            'role_id' => '1'
        ]);

         DB::table('roles_asignados')->insert([
            'user_id' => '1', 
            'role_id' => '2'
        ]);

        
         DB::table('roles_asignados')->insert([
            'user_id' => '2', 
            'role_id' => '2'
        ]);
    }
}
