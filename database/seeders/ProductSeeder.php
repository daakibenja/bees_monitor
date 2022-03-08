<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//imports
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            "name"=>"Galaxy A21",
            "price"=>30.00,
            "category"=>"xxxxx",
            "description"=>"swi swi swisow",
            "imageUrl"=>"hehsdhjsdhjdsjs"
        ]);
    }
}
