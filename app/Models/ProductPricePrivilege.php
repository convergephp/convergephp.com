<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Paddle\Price;

class ProductPricePrivilege extends Model
{
    /** @use HasFactory<\Database\Factories\ProductPricePrivilegeFactory> */
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get the price that owns the ProductPricePrivilege
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function price(): BelongsTo
    {
        return $this->belongsTo(Price::class);
    }
}
