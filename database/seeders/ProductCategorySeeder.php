<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create(['tenant_id' => Tenant::value('id'), 'name' => 'Bebidas']);
        ProductCategory::create(['tenant_id' => Tenant::value('id'), 'name' => 'Salgados']);
        ProductCategory::create(['tenant_id' => Tenant::value('id'), 'name' => 'Doces / Sobremesas']);
        ProductCategory::create(['tenant_id' => Tenant::value('id'), 'name' => 'Ingredientes / Insumos']);
        ProductCategory::create(['tenant_id' => Tenant::value('id'), 'name' => 'Outros']);
    }
}
