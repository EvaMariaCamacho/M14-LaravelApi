<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Painting;
use iluminate\Support\Facades\DB;

class PaintingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\Painting::factory(10)->create();
    }
}
