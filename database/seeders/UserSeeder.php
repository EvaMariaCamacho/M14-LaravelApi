<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name' => 'jose', 
            'email' => 'jose@gmail.com',
            'password' => 'password'
        ]);

        DB::table('users')->insert([
            'name' => 'ana', 
            'email' => 'ana@gmail.com',
            'password' => 'password'
        ]);
    }
}
