<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'tenant_id',
    'cash_register_id',
    'type',
    'amount',
    'reason',
    'created_by',
    'updated_by',
])]
class CashRegisterMovement extends Model
{
    //
}
