<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'user_id' => 1,
            'category_id' => 1,
            'name' => 'COCA COLA 600ML',
            'min_stock' => 5,
        ]);
        Product::create([
            'user_id' => 1,
            'category_id' => 1,
            'name' => 'PEPSI 600ML',
            'min_stock' => 5,
        ]);
        Product::create([
            'user_id' => 1,
            'category_id' => 4,
            'name' => 'FARINHA DE TRIGO 1KG',
            'min_stock' => 5,
        ]);

    }
}
