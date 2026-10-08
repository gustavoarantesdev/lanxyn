<?php

namespace Database\Seeders;

use App\Models\CardMachine;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class CardMachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CardMachine::create([
            'tenant_id' => Tenant::value('id'),
            'name' => 'Máquina Padrão',
        ]);
    }
}
