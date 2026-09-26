<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'stock_id',
    'quantity',
    'movement_type',
    'reason',
    'movement_date',
])]
class StockMovement extends Model
{
    //
}
