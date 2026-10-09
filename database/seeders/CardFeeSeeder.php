<?php

namespace Database\Seeders;

use App\Models\CardFee;
use App\Models\CardMachine;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class CardFeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CardFee::create([
            'tenant_id' => Tenant::value('id'),
            'machine_id' => CardMachine::value('id'),
            'brand' => 'Taxa Padrão',
            'type' => 'Crédito',
            'interest_rate' => 2.5,
            'settlement_days' => 1,
        ]);
    }
}
