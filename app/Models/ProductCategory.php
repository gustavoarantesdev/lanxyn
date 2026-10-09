<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['tenant_id', 'name', 'is_active', 'created_by', 'updated_by'])]
class ProductCategory extends Model
{
    //
}
