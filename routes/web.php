<?php

use Illuminate\Support\Facades\Route;

#Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;


Route::get('/', [HomeController::class, 'index']);

Route::prefix('/admin')->group(function (){

    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'loginAction']);

    Route::get('/register', [AdminController::class, 'register'])->name('register');
    Route::post('/register', [AdminController::class, 'registerAction']);

    Route::get('/logout', [AdminController::class, 'logout']);

    Route::get('/', [AdminController::class, 'index']);

    Route::get('/{slug}/links', [AdminController::class, 'pageLinks']);
    Route::get('/{slug}/design', [AdminController::class, 'pageDesign']);
    Route::get('/{slug}/stats', [AdminController::class, 'pageStats']);

});

Route::get('/{slug}', [PageController::class, 'index']);