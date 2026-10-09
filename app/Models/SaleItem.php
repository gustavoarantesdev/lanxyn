<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'sale_id',
    'product_id',
    'quantity',
    'unit_price',
    'subtotal_amount',
    'discount_amount',
    'total_amount',
    'created_by',
    'updated_by',
])]
class SaleItem extends Model
{
    //
}
