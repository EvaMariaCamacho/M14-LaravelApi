<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;
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
       \App\Models\Shop::factory(10)->create();
    }
}
