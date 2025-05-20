<?php

namespace App\Observers;

use App\Models\Product;
use Carbon\Carbon;

class ProductObserver
{
    /**
     * Handle the Product "created" event.
     */
    public function created(Product $product): void
    {
        if ($product->is_launched) {
            $product->launched_at = Carbon::now();
            $product->saveQuietly();
        }
    }

    /**
     * Handle the Product "updated" event.
     */
    public function updated(Product $product): void
    {
        if ($product->isDirty('launched_at')) {

            if ($product->is_launched) {
                $product->launched_at = Carbon::now();
            } else {
                $product->launched_at = null;
            }
            $product->saveQuietly();
        }
    }
}
