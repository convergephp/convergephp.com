<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class License extends Model
{
    /** @use HasFactory<\Database\Factories\LicenseFactory> */
    use HasFactory;

    protected $guarded = ['id'];
    /**
     * Get the user that owns the License
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function price(): BelongsTo
    {
        return $this->belongsTo(ProductPrice::class);
    }

    public function maximumProductionActivationCount()
    {
        return $this->price?->privilege?->prod_activation_limit ?? 0;
    }

    public function maximumLocalActivationCount()
    {
        return $this->price?->privilege?->local_activation_limit ?? 0;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
