<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\WalletController;
use App\Http\Controllers\Admin\UpdateAccountController;


Route::prefix("admin")->middleware(["auth", "admin"])->group(function(){

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');

    Route::get("/user", [AdminController::class, 'users'])->name('admin.users');
    // Wallet
    Route::get('/wallet-eth', [WalletController::class, 'eth'])->name('admin.eth');
    Route::get('/wallet-btc', [WalletController::class, 'btc'])->name('admin.btc');

   //chat
    Route::get('/chat', [ChatController::class, 'chatBot'])->name('admin.chat');
    Route::get('/contact-request', [ChatController::class, 'contactRequest'])->name('admin.request');
    Route::get('/security', [UpdateAccountController::class, 'security'])->name('admin.security');
    Route::get('/security/change-password', [UpdateAccountController::class, 'changePassword'])->name('admin.security.password');
});

// Profile
Route::get('/admin/profile', function () {
    return view('admin.profile');
})->name('admin.profile');
// Updates


