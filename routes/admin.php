<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::view('admin/login', 'admin/auth/login')->name('admin.login.form');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::view('dashboard', 'admin/dashboard')->name('admin.dashboard');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('admin.logout');
});

// Route::middleware(['admin'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

// });
