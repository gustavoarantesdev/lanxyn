<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'tenant_id' => Tenant::value('id'),
            'category_id' => 1,
            'name' => 'COCA COLA 600ML',
            'sell_price' => 5.00,
            'min_stock' => 5,
        ]);
        Product::create([
            'tenant_id' => Tenant::value('id'),
            'category_id' => 1,
            'name' => 'PEPSI 600ML',
            'sell_price' => 5.00,
            'min_stock' => 5,
        ]);
        Product::create([
            'tenant_id' => Tenant::value('id'),
            'category_id' => 4,
            'name' => 'FARINHA DE TRIGO 1KG',
            'min_stock' => 5,
        ]);

    }
}
