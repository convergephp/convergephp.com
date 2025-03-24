<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Thumbnail extends Model
{
    /** @use HasFactory<\Database\Factories\ThumbnailFactory> */
    use HasFactory;

    protected $fillable = [
        'name', 'title', 'description', 'product_id',
    ];

    /**
     * Get the product associated with thumbnail
     *
     * @return BelongsTo
     */
    public function product() : BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
