<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;
use Illuminate\Support\Facades\DB;
;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // \App\Models\Shop::factory(10)->create();
        DB::table('shops')->insert([
            'nombre' => 'Tienda Collaret White', 
            'capacidad' => '40'
        ]);

          DB::table('shops')->insert([
            'nombre' => 'Tienda White Collaret', 
            'capacidad' => '100'
        ]);

         DB::table('shops')->insert([
            'nombre' => 'Tienda Painting Collaret', 
            'capacidad' => '200'
        ]);






    }
}
