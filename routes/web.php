<?php
use App\Http\Controllers\BillingPortalController;
use App\Livewire\Home\Index;
use Illuminate\Http\Request;
use App\Livewire\Board;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Laravel\Paddle\Transaction;

Route::get('/', Index::class)->name('home');

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

Route::prefix('toolkits')->group(function () {
    Route::get('/', ProductController::class)->name('products.index');
    Route::get('/{product:slug}', [ProductController::class, 'show'])->name('products.show');
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


    Route::redirect('/profile', 'settings/profile');

    Route::prefix('settings')->group(function () {
        Route::redirect('/', 'settings/profile');
        Route::get('profile', Profile::class)->name('settings.profile');
        Route::get('password', Password::class)->name('settings.password');
    });

    Route::prefix('board')->group(function () {
        Route::get('licenses', Board\Licenses::class)->name('boards.licenses');
        Route::get('activations', Board\Activations::class)->name('boards.activations');
        Route::get('transactions', Board\Transactions::class)->name('boards.transactions');
        Route::get('billing', Board\Billing::class)->name('boards.billing');
        Route::get('billing-portal', BillingPortalController::class)->name('boards.billing-portal');
    });
});

Route::get('/download-invoice/{transaction}', function (Request $request, Transaction $transaction) {
    return $transaction->redirectToInvoicePdf();
})->name('download-invoice');

require __DIR__ . '/auth.php';
