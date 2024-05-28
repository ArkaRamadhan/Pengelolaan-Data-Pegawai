<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupervisorController;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(['auth', 'admin'])->group(function () {

        Route::get('admin/dashboard', [PostController::class, 'index']);
        Route::get('admin/pegawai', [PostController::class, 'tabel']);
        Route::get('admin/create', [PostController::class, 'create']);
        Route::post('admin/store', [PostController::class, 'store']);
        Route::get('admin/edit/{id}', [PostController::class, 'edit']);
        Route::put('admin/update/{id}', [PostController::class, 'update']);
        Route::get('admin/show/{id}', [PostController::class, 'show']);
        Route::delete('admin/destroy/{id}', [PostController::class, 'destroy']);

        Route::get('admin/table/dashboard', [TableController::class, 'index']);
        Route::get('admin/table/create', [TableController::class, 'create']);
        Route::post('admin/table/store', [TableController::class, 'store']);
        Route::get('admin/table/edit/{id}', [TableController::class, 'edit']);
        Route::put('admin/table/update/{id}', [TableController::class, 'update']);
        Route::delete('admin/table/destroy/{id}', [TableController::class, 'destroy']);

    });

    Route::middleware(['auth', 'supervisor'])->group(function () {
        Route::get('supervisor/dashboard', [SupervisorController::class, 'index']);
        Route::get('supervisor/show/{id}', [SupervisorController::class, 'show']);
        Route::get('supervisor/pegawai', [SupervisorController::class, 'pegawai']);
    });
});

Route::get('dashboard', [UserController::class, 'index']);
Route::get('pegawai', [UserController::class, 'pegawai']);
Route::get('tabel_user', [UserController::class, 'tabel_user']);

require __DIR__ . '/auth.php';
