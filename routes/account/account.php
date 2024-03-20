<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account\OrdersController;
use App\Http\Controllers\Account\DepositController;
use App\Http\Controllers\Account\WithdrawController;
use App\Http\Controllers\Account\DashboardController;

Route::prefix('account')->name('account.')->group(function () {
    // Route::get('/', function () {
    //     return view('admin.index');
    // })->name('account');

    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/deposit', [DepositController::class, 'deposit'])->name('deposit');
    Route::get('/withdrawal-history', [WithdrawController::class, 'history'])->name('history');
    Route::get('/orders', [OrdersController::class, 'orders'])->name('orders');
    Route::get('/earnings', [OrdersController::class, 'earnings'])->name('earnings');


});


