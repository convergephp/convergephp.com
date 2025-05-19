<?php

use App\Http\Controllers\BillingPortalController;
use Illuminate\Http\Request;
use App\Livewire\Board;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Laravel\Paddle\Transaction;


Route::get('/', \App\Livewire\Home\Index::class)->name('home');

Route::get('/roadmap', \App\Livewire\Roadmap\Index::class)->name('roadmap');

Route::get('/solutions/blogging', \App\Livewire\Solutions\Blogging::class)->name('solutions.blogging');

Route::get('/solutions/documentation', \App\Livewire\Solutions\Documentation::class)->name('solutions.documentation');




Route::get('pricing', function () {
    return view('pages.pricing');
})->name('pricing');

// Route::redirect('/toolkit', '/toolkits');


// // PRODUCTS
// Route::prefix('toolkits')->group(function () {
//     Route::get('/', ProductController::class)->name('products.index');
//     Route::get('/{product:slug}', [ProductController::class, 'show'])->name('products.show');
// });


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// BOARD ROUTES
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

// INVOICES
Route::get('/download-invoice/{transaction}', function (Request $request, Transaction $transaction) {
    return $transaction->redirectToInvoicePdf();
})->name('download-invoice');

// POLICIES
Route::get('/terms-of-use', fn() => view('pages.terms'))->name('terms');
Route::get('/privacy-policy', fn() => view('pages.privacy'))->name('privacy');
Route::get('/refund-policy', fn() => view('pages.refund'))->name('refund');



require __DIR__ . '/auth.php';
