<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductPrice extends Model
{

    /** @use HasFactory<\Database\Factories\ProductPriceFactory> */
    use HasFactory;

    /**

     * Get the attributes that should be cast.

     *

     * @return array<string, string>

     */

     protected function casts(): array

     {
 
         return [
 
             'features' => 'json',
 
         ];
 
     }
    /**
     * Get the product that owns the ProductPrice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
