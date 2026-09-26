<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'user_id' => 1,
            'person_type' => 'PJ',
            'document_number' => '00.000.000/0000-00',
            'name' => 'Assai Atacadista Buriti',
        ]);
    }
}
