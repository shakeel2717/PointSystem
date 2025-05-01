<?php

use App\Http\Controllers\EditPasswordController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\DashboardController;
use App\Models\User\PointController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');

Route::prefix('user')->name('user.')->middleware('auth')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('point', PointController::class);
});

Route::resource('editprofile', EditProfileController::class);
Route::resource('editpassword', EditPasswordController::class);

require __DIR__ . '/auth.php';
// require __DIR__ . '/admin.php';
