<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'tenant_id',
    'name',
    'account_name',
    'branch_number',
    'account_number',
    'notes',
    'created_by',
    'updated_by',
])]
class BankAccount extends Model
{
    //
}
