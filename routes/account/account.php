<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account\OrdersController;
use App\Http\Controllers\Account\DepositController;
use App\Http\Controllers\Account\WithdrawController;
use App\Http\Controllers\Account\AffiliateController;
use App\Http\Controllers\Account\DashboardController;
use App\Http\Controllers\Account\UpdateAccountController;

Route::prefix('account')->name('account.')->group(function () {
    // Route::get('/', function () {
    //     return view('admin.index');
    // })->name('account');

    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/deposit', [DepositController::class, 'deposit'])->name('deposit');
    Route::get('/withdrawal-history', [WithdrawController::class, 'history'])->name('history');
    Route::get('/make-withdrawal', [WithdrawController::class, 'withdrawal'])->name('withdrawal');
    Route::get('/orders', [OrdersController::class, 'orders'])->name('orders');
    Route::get('/earnings', [OrdersController::class, 'earnings'])->name('earnings');
    Route::get('/affiliate', [AffiliateController::class, 'affiliate'])->name('affiliate');
    Route::get('/security', [UpdateAccountController::class, 'security'])->name('security');
    Route::get('/change-password', [UpdateAccountController::class, 'changePassword'])->name('change.password');


});


