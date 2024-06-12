<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\QuestionnaireController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::name('admin.')->group(function () {
    Route::group([
        'middleware' => ['guest:admin'],
    ], function () {
        Route::get('/', [AuthenticatedSessionController::class, 'create']);

        Route::get('/login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

        Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    });

    Route::group([
        'middleware' => ['auth:admin'],
    ], function () {
        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');

        Route::get('/', function () {
            return Inertia::render('Admin/Dashboard');
        });

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::put('password', [ProfileController::class, 'updatePassword'])->name('password.update');

        Route::get('/dashboard', function () {
            return Inertia::render('Admin/Dashboard');
        })
            ->name('dashboard');

        Route::resource('questionnaires', QuestionnaireController::class)->only(['index', 'create', 'store']);
    });
});
