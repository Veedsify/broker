<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::prefix("admin")->group(function(){
    
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');

    Route::get("/user", [AdminController::class, 'users'])->name('admin.users');
});

Route::get('/admin/profile', function () {
    return view('admin.profile');
})->name('admin.ido');
