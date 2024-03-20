<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\WalletController;


Route::prefix("admin")->group(function(){

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
});

// Profile
Route::get('/admin/profile', function () {
    return view('admin.profile');
})->name('admin.profile');


