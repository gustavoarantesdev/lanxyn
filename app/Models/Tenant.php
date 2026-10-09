<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'legal_name',
    'person_type',
    'document_number',
    'mobile_phone',
    'landline_phone',
    'email',
    'notes',
    'started_at',
    'ended_at',
])]
class Tenant extends Model
{
    //
}
