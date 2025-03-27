<?php

namespace App\Http\Controllers;
use Filament\Notifications\Notification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Laravel\Paddle\Cashier;

class BillingPortalController extends Controller
{
    public function __invoke()
    {
        $customerId = optional(Auth::user())->customer()->first()->paddle_id;

        if (blank($customerId)) {

            $this->notify();

            return new RedirectResponse(URL::route('product.index'));
        }
        
        $response = Cashier::api(
            method: 'POST',
            uri: "customers/{$customerId}/portal-sessions"
        );

        $url = $response['data']['urls']['general']['overview'] ?? null;

        if ($url) {
            return new RedirectResponse($url);
        }
    }

    private function notify()
    {
        return Notification::make()
            ->title('Subscription Required')
            ->body('You need an active subscription to access this feature. Please choose a plan to continue.')
            ->color('warning')
            ->duration(5000)
            ->send();
    }
}
