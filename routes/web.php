<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageControllers;

Route::prefix('pelanggan')->group(function () {
    Route::get('/login', [PageControllers::class, 'login'])->name('pelanggan.login');
    Route::get('/dashboard', [PageControllers::class, 'dashboard'])->name('pelanggan.dashboard');
    Route::get('/profile', [PageControllers::class, 'profile'])->name('pelanggan.profile');
    Route::get(uri: 'logout', action: [PageControllers::class, 'logout'])->name(name: 'logout');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [PageControllers::class, 'showlogin'])->name('admin.login');
    Route::post('/login', [PageControllers::class, 'doLoginAdmin'])->name('admin.login.submit');
    Route::get('/dashboard', [PageControllers::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/profile', [PageControllers::class, 'profile'])->name('admin.profile');
    Route::get('/pengelolaan-menu', [PageControllers::class, 'pengelolaanmenu'])->name('admin.menu');
    Route::get(uri: 'logout', action: [PageControllers::class, 'logout'])->name(name: 'logout');
});
