<?php

use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::name('api.')->group(function () {
    Route::name('course.')->group(function () {
        Route::get('/courses/instructors', [CourseController::class, 'instructorList'])->name('instructors.index');
        Route::get('/courses', [CourseController::class, 'index'])->name('index');
        Route::post('/courses', [CourseController::class, 'store'])->name('store');
        Route::put('/courses/{id}', [CourseController::class, 'update'])->name('update');
        Route::get('/courses/{id}', [CourseController::class, 'show'])->name('show');
        Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('destroy');
    });
});
