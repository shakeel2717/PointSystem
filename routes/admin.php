<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Middleware\CheckIfUserIsAdmin;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware('auth', CheckIfUserIsAdmin::class)->group(function () {
    Route::resource('dashboard', DashboardController::class);
});
