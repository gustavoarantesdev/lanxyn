<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'user_id',
    'product_id',
    'supplier_id',
    'batch_code',
    'initial_quantity',
    'remaining_quantity',
    'purchase_date',
    'expiration_date',
    'location',
])]
class StockBatch extends Model
{
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
