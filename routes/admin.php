<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PointController;
use App\Http\Middleware\CheckIfUserIsAdmin;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware('auth', CheckIfUserIsAdmin::class)->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::controller(PointController::class)->name('point.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('add', 'add')->name('add');
        Route::post('add', 'addStore')->name('add.store');
        Route::get('charge', 'charge')->name('charge');
        Route::post('charge', 'chargeStore')->name('charge.store');
        Route::get('users', 'users')->name('users');
        Route::get('password/{user_id}', 'password')->name('password');
    });
});
