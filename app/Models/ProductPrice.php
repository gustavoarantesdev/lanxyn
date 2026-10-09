<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'tenant_id',
    'product_id',
    'transaction_type',
    'price',
    'created_by',
    'updated_by',
])]
class ProductPrice extends Model
{
    //
}
