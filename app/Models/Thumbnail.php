<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Thumbnail extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\ThumbnailFactory> */
    use HasFactory;
    use InteractsWithMedia;

    
    protected $fillable = [
        'name', 'title', 'description', 'product_id',
    ];

    /**
     * Get the product associated with thumbnail
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Define media collections for the thumbnail
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('thumbnails')
            ->useDisk('public');
    }
}
