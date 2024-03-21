<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account\OrdersController;
use App\Http\Controllers\Account\DepositController;
use App\Http\Controllers\Account\WithdrawController;
use App\Http\Controllers\Account\AffiliateController;
use App\Http\Controllers\Account\DashboardController;
use App\Http\Controllers\Account\UpdateAccountController;
use App\Http\Controllers\TierController;
use App\Models\Activity;
use Illuminate\Support\Facades\View;

Route::prefix('account')->middleware(["auth"])->name('account.')->group(function () {
    View::composer('*', function ($view) {
        $activity = Activity::where('user_id', auth()->id())->get();
        $view->with('activities', $activity);
    });
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/deposit', [DepositController::class, 'deposit'])->name('deposit');
    Route::get('/transaction/{id}', [DepositController::class, 'confirm_page'])->name('confirm-deposit');
    Route::post('/deposit/confirm', [DepositController::class, 'confirm'])->name('deposit.confirm');
    Route::get('/withdrawal-history', [WithdrawController::class, 'history'])->name('history');
    Route::get('/make-withdrawal', [WithdrawController::class, 'withdrawal'])->name('withdrawal');
    Route::get('/orders', [OrdersController::class, 'orders'])->name('orders');
    Route::get('/earnings', [OrdersController::class, 'earnings'])->name('earnings');
    Route::get('/affiliate', [AffiliateController::class, 'affiliate'])->name('affiliate');
    Route::get('/security', [UpdateAccountController::class, 'security'])->name('security');
    Route::get('/security/change-password', [UpdateAccountController::class, 'changePassword'])->name('change.password');
    Route::get("/tiers/{id}", [TierController::class, 'tiers'])->name('tiers');
});
