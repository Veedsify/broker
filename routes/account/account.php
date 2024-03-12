<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account\DepositController;
use App\Http\Controllers\Account\WithdrawController;
use App\Http\Controllers\Account\DashboardController;

Route::prefix('account')->name('account.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/deposit', [DepositController::class, 'deposit'])->name('deposit');
    Route::get('/history', [WithdrawController::class, 'history'])->name('history');
});


