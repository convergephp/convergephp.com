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
        $user = $event->billable;

        $data = $event->payload['data'];

        $productId = $data['custom_data']['product_id'] ?? null;

        $productPriceId = $data['custom_data']['product_price_id'] ?? null;

        foreach ($data['items'] as $item) { // in our case there is only one item in items data but weed to ensure 
            $user->licenses()->create([     // that we don't loose any data. 
                'key' => Str::random(64),
                'product_id' => $productId,
                'product_price_id' => $productPriceId,
                'paddle_product_id' => $item['price']['product_id'],
                'paddle_product_price_id' => $item['price']['id'],
                'quantity' => $item['quantity'] ?? 1
            ]);
        }
    }
}
