<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'sale_id',
    'payment_method_id',
    'amount',
    'fee_rate',
    'fee_amount',
    'net_amount',
    'installment_count',
    'credit_date',
    'created_by',
    'updated_by',
])]
class SalePayment extends Model
{
    //
}
