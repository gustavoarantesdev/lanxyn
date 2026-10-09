<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenant::create([
            'name' => 'Empresa Padrão',
            'legal_name' => 'Empresa Padrão',
            'person_type' => 'PJ',
            'document_number' => '99.999.999/0001-99',
            'mobile_phone' => '99 99999-9999',
            'email' => 'exemple@email.com',
            'started_at' => now(),
        ]);
    }
}
