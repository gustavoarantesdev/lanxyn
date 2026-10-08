<?php

namespace Database\Seeders;

use App\Models\BankAccount;
use App\Models\PaymentMethod;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentMethod::create([
            'tenant_id' => Tenant::value('id'),
            'account_id' => BankAccount::value('id'),
            'name' => 'PIX',
            'short_name' => 'PIX',
        ]);
    }
}
