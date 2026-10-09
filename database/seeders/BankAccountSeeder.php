<?php

namespace Database\Seeders;

use App\Models\BankAccount;
use app\Models\Tenant;
use Illuminate\Database\Seeder;

class BankAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BankAccount::create([
            'tenant_id' => Tenant::value('id'),
            'name' => 'Banco Padrão',
            'account_name' => 'BP',
            'branch_number' => '9999',
            'account_number' => '99999',
        ]);
    }
}
