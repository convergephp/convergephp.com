<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Auth;

class ProductPrice extends Model
{

    /** @use HasFactory<\Database\Factories\ProductPriceFactory> */
    use HasFactory;

    protected $guarded = ['id'];
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


    protected function checkout(): Attribute

    {


        $checkout = null;

        if (Auth::check()) {

            /** @var App\Models\User */
            $user = Auth::user();

            $checkout = $user->checkout($this->paddle_price_id)
                ->returnTo(route('products.index'))
                ->customData([
                    'product_id' => $this->product_id,
                    'product_price_id' => $this->id,
                ]);
        }

        return Attribute::make(
            get: fn() => $checkout,
        );
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


    /**
     * Get the privilege associated with the ProductPrice
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function privilege(): HasOne
    {
        return $this->hasOne(ProductPricePrivilege::class);
    }
}
