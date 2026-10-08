<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Foundation\Auth\User as Authenticatable;

#[Fillable([
    'tenant_id',
    'name',
    'document_number',
    'birthday',
    'mobile_phone',
    'landline_phone',
    'email',
    'password',
    'role',
    'job_title',
    'joined_at',
    'removed_at',
    'last_login_at',
])]
#[Hidden(['password'])]
class User extends Authenticatable
{
    //
}
