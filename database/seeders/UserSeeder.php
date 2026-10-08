<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'tenant_id' => Tenant::value('id'),
            'name' => 'Usuário Padrão',
            'document_number' => '999.999.999-99',
            'mobile_phone' => '99 99999-9999',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
