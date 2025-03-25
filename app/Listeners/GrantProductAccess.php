<?php

namespace App\Listeners;

use App\Models\License;
use Illuminate\Support\Str;
use Laravel\Paddle\Events\TransactionCompleted;

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
    public function handle(TransactionCompleted $event): void
    {
        $user = $event->billable->id;

        $data = $event->payload['data'];

        $productId = $data['custom_data']['product_id'] ?? null;

        $productPriceId = $data['custom_data']['product_price_id'] ?? null;

        $item = $data['items'][0];
        
        $paddleProductId = $item['price']['product_id'];
        $paddleProductPriceId = $item['price']['id'];
        
        $user->licenses()->create([
            
        ])
        info(json_encode($data));
    }
}
