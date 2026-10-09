<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'tenant_id',
    'opened_at',
    'opened_by',
    'opening_amount',
    'closed_at',
    'closed_by',
    'expected_amount',
    'actual_amount',
    'difference_amount',
    'status',
])]
class CashRegister extends Model
{
    //
}
