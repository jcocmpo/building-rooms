<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\RoomController;

// Home route
Route::get('/', function () {
    return view('home');
});

// Dashboard routes
Route::get('/studentdash', [StudentDashboardController::class, 'index']);
// In your web.php file, add a name to the route for admindash
Route::get('/admindash', [AdminDashboardController::class, 'index'])->name('admindash');

Route::get('/teacherdash', [TeacherDashboardController::class, 'index']);

// Route for Room Dashboard (Admin)
Route::get('/roomdash', [AdminDashboardController::class, 'showRoomDash'])->name('roomdash');

// Room routes
Route::prefix('rooms')->name('rooms.')->group(function () {
    Route::get('/', [RoomController::class, 'index'])->name('index');
    Route::get('/create', [RoomController::class, 'create'])->name('create');
    Route::post('/store', [RoomController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [RoomController::class, 'edit'])->name('edit');
    Route::put('/{id}', [RoomController::class, 'update'])->name('update');
    Route::delete('/{id}', [RoomController::class, 'destroy'])->name('destroy');
});
