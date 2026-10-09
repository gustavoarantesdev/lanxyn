<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'tenant_id',
    'machine_id',
    'brand',
    'type',
    'interest_rate',
    'settlement_days',
    'is_active',
    'created_by',
    'updated_by',
])]
class CardFee extends Model
{
    //
}
