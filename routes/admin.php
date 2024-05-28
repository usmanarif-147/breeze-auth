<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// Route::middleware('guest')->group(function () {
//     Route::view('admin/login', 'admin/auth/login')->name('admin.login.form');
// });

Route::middleware('auth')->group(function () {
    Route::view('dashboard', 'admin/dashboard')->name('admin.dashboard');
});
