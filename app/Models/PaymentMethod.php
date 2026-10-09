<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'tenant_id',
    'account_id',
    'name',
    'type',
    'is_active',
    'created_by',
    'updated_by',
])]
class PaymentMethod extends Model
{
    //
}
