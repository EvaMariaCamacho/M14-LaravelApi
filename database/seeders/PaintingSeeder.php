<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaintingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // \App\Models\Painting::factory(10)->create();

       DB::table('paintings')->insert([
            'autor' => 'Diego Velazquez', 
            'cuadro' => 'Las meninas',
            'precio' => '10000',
            'entrega' => '2021-01-20'
        ]);

         DB::table('paintings')->insert([
            'autor' => 'Salvador Dali', 
            'cuadro' => 'Los Elefantes',
            'precio' => '20000',
            'entrega' => '2021-02-28'
        ]);

         DB::table('paintings')->insert([
            'autor' => 'Vicente van Gogh', 
            'cuadro' => 'La noche estrellada',
            'precio' => '15000',
            'entrega' => '2021-03-03'
        ]);
    }
}
