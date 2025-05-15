<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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
        return $this->belongsTo(ProductPrice::class, 'product_price_id');
    }

    public function hasAdminKeyAccess()
    {
        return $this->key === config('internal.admin_access_key');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
        public function scopeWhereExpired(Builder $query): void
    {
        $query->where('expires_at', '<', now());
    }

    public function scopeWhereNotExpired(Builder $query): void
    {
        $query->where(function (Builder $query): void {
            $query
                ->whereNull('expires_at')
                ->orWhere('expires_at', '>', now());
        });
    }

}
