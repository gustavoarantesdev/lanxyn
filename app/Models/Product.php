<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'user_id',
    'category_id',
    'name',
    'sell_price',
    'min_stock',
    'max_stock',
    'measure_unit',
    'description',
    'is_active',
])]
class Product extends Model
{
    //
}
