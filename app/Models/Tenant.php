<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'trade_name',
    'person_type',
    'document_number',
    'mobile_phone',
    'landline_phone',
    'email',
    'notes',
    'joined_at',
    'ended_at',
])]
class Tenant extends Model
{
    //
}
