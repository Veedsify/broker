<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

Route::get('/admin/profile', function () {
    return view('admin.profile');
})->name('admin.ido');
