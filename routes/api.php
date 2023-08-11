<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PostsController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::post('login', [AuthController::class, 'login']);



Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('logout', 'logout')->middleware(['auth:api', 'auth.role:su,admin,user']);
    Route::post('refresh', 'refresh')->middleware(['auth:api', 'auth.role:su,admin,user']);
    Route::get('profil', 'profil')->middleware(['auth:api', 'auth.role:su,admin,user']);
});

Route::controller(UserController::class)->prefix('user')->group(function () {
    Route::middleware(['auth:api', 'auth.role:su,admin'])->group(function () {
        Route::get('/', 'index');
        Route::post('/store', 'store');
        Route::post('/{id}', 'destroy');
    });
    Route::middleware(['auth:api', 'auth.role:su,admin,user'])->group(function () {
        Route::get('/{id}', 'show');
        Route::put('/{id}', 'update');
    });
});

Route::controller(PostsController::class)->group(function () {
    Route::get('/posts', 'index');
});
