<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'user_id',
    'person_type',
    'document_number',
    'name',
    'notes',
    'is_active',
])]
class Supplier extends Model
{
    //
}
