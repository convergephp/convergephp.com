<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPricePrivilege extends Model
{
    /** @use HasFactory<\Database\Factories\ProductPricePrivilegeFactory> */
    use HasFactory;
    protected $guarded = ['id'];
}
