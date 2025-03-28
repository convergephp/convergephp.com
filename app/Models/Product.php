<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get all of the prices for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prices(): HasMany
    {
        return $this->hasMany(ProductPrice::class);
    }

<<<<<<< HEAD
    /**
     * Get all of thumbnails for the product
     *
     * @return HasMany
     */
    public function thumbnails() : HasMany
    {
        return $this->hasMany(Thumbnail::class)->chaperone();
=======
    public function licenses(){
        return $this->hasMany(License::class);
>>>>>>> 46977adc5bd0d1eee7de37f5b3b7ef7a7865053b
    }
}
