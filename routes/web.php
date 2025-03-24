<?php

use App\Http\Controllers\ProductController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/buy', function (Request $request) {

    $checkout = null;
    if (auth()->check()) {
        $checkout = $request->user()->checkout('pri_01jptqkj6r55xba71ff7mm0vwz')

            ->returnTo(route('dashboard'));
    }


    return view('buy', ['checkout' => $checkout]);
})->name('checkout');

Route::get('pricing', function () {
    return view('pages.pricing');
})->name('pricing');

Route::prefix('toolkits')->group(function(){
    Route::get('/',ProductController::class)->name('products.index');
    Route::get('/{product:slug}',[ProductController::class, 'show'])->name('products.show');
});


Route::get('toolkits/blade-components', function () {
    return view("pages.components");
})->name('components');

Route::get('toolkits/layouts', function () {
    return view("pages.layouts");
})->name('layouts');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    
    Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';
