<?php

namespace App\Models;

use App\Observers\ProductObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

#[ObservedBy(ProductObserver::class)]
class Product extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    use InteractsWithMedia;

    protected $guarded = ['id'];

    public function casts()
    {
        return [
            'features' => 'array',
            'is_launched' => 'boolean',
            'launched_at' => 'datetime',
        ];
    }

    /**
     * Get all of the prices for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prices(): HasMany
    {
        return $this->hasMany(ProductPrice::class);
    }

    /**
     * Get all of thumbnails for the product
     *
     * @return HasMany
     */
    public function thumbnails(): HasMany
    {
        return $this->hasMany(Thumbnail::class)->chaperone();
    }


    public function licenses()
    {
        return $this->hasMany(License::class);
    }

    /**
     * Scope a query to only include popular users.
     */
    public function scopeLaunched(Builder $query): void
    {
        $query->where('is_launched', true);
    }





    /**
     * Define media collections for the thumbnail
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('product-image')
            ->useDisk('public');
    }
}
