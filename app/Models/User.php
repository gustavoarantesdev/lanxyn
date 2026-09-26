<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Foundation\Auth\User as Authenticatable;

#[Fillable(['name', 'email', 'password', 'role', 'last_login_at', 'joined_at', 'ended_at'])]
#[Hidden(['password'])]
class User extends Authenticatable
{
    //
}
