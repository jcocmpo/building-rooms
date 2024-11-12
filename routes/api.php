<?php

use App\Http\Controllers\GradeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActGradeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');






Route::apiResource('grades', GradeController::class);

Route::apiResource('activity_grades', ActGradeController::class);

