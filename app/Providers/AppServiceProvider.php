<?php

namespace App\Providers;

use App\Events\ProductPurchased;
use Illuminate\Support\Facades\Auth;
use App\Listeners\GrantProductAccess;
use App\Models\License;
use Converge\Enums\Interceptor;
use Converge\Views\ViewInterceptor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(ProductPurchased::class, GrantProductAccess::class);

        app(ViewInterceptor::class)
            ->registerViewInterceptor(Interceptor::FIXED_CARBON_ADS,  fn() => view('components.carbon-ads'))
            ->registerViewInterceptor(Interceptor::HEAD_END, fn() => view('components.analytics.gtags'))
            ->registerViewInterceptor(Interceptor::BODY_START, fn() => view('components.fluxtor-banner'));
    }
}
