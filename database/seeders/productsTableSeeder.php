<?php

namespace Database\Seeders;
// use Illuminate\Support\Str;~
use Illuminate\Database\Seeder;
use Database\Factories\productsFactory;
use App\Models\Products;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
        Products::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();    
    }
}
