<?php

use App\Http\Controllers\api\PasswordResetController;
use App\Http\Controllers\PermisssionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpatieController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Public routes

Route::get('/reset-password', [PasswordResetController::class,'resetPassword']);
Route::post('/update-password', [PasswordResetController::class,'updatePassword'])->name('update.password');

// protected routes
Route::middleware(['auth'])->group(function () {
    Route::resource('/dashboard', SpatieController::class);

        Route::get('/roles', [SpatieController::class,'role']);
        Route::get('/get-roles', [SpatieController::class,'getRoles']);
        Route::get('/ajax-data', [SpatieController::class,'ajax']);
        Route::post('/role-data', [SpatieController::class,'createRole']);
        Route::post('/assign-role',[SpatieController::class,'assignRole']);
        Route::get('/get-permi/{role}',[PermisssionController::class,'getPermission']);
        Route::post('/permissionUpdate',[PermisssionController::class,'permissionUpdate']);
        Route::resource('/permissions', PermisssionController::class);
        Route::resource('/tasks', TaskController::class);

});

// Protected Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
