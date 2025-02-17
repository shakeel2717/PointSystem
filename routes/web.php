<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');

Route::prefix('user')->name('user.')->middleware('auth')->group(function () {
    Route::resource('dashboard', DashboardController::class);
});

require __DIR__ . '/auth.php';
