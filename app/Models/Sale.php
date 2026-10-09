<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'tenant_id',
    'cash_register_id',
    'sales_channel',
    'subtotal_amount',
    'discount_amount',
    'total_amount',
    'status',
    'sold_at',
    'created_by',
    'updated_by',
])]
class Sale extends Model
{
    //
}
