<?php

namespace App\Listeners;

use App\Events\ProductPurchased;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GrantProductAccess
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProductPurchased $event): void
    {
        $productId = $event->payload['data']['custom_data']['product_id'] ?? null;

        $product = User::query()->atta();

     
    }
}
