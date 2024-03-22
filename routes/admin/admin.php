<?php

use App\Http\Controllers\Account\OrdersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\WalletController;
use App\Http\Controllers\Admin\UpdateAccountController;
use App\Http\Controllers\UserController;

Route::prefix("admin")->middleware(["auth", "admin"])->group(function(){

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');

    // User
    Route::get("/user", [AdminController::class, 'users'])->name('admin.users');
    Route::get("/user/edit/{id}", [AdminController::class, 'editUser'])->name('admin.edit.user');
    Route::get("/user/balance/{id}", [AdminController::class, 'editBalance'])->name('admin.edit.balance');
    Route::post("/approve/transaction/{trxId}", [OrdersController::class, 'approve'])->name('admin.approve');
    Route::post("/setData/{id}", [UserController::class, 'setUserData'])->name('admin.user.update');

    //Mails
    Route::get('/send-mail', [AdminController::class, 'mails'])->name('admin.mails');
    Route::post('/email/send-mail', [AdminController::class, 'sendemail'])->name('admin.mail.send');

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


