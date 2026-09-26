<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create(['user_id' => 1, 'name' => 'Bebidas']);
        ProductCategory::create(['user_id' => 1, 'name' => 'Lanches']);
        ProductCategory::create(['user_id' => 1, 'name' => 'Doces / Sobremesas']);
        ProductCategory::create(['user_id' => 1, 'name' => 'Ingredientes / Insumos']);
    }
}
