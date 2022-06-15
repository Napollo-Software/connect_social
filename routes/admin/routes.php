<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InviteController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;


Route::middleware(['auth','can:super-admin-views'])->group(function () {
    Route::prefix('invite')->group(function () {
        Route::get('/', [InviteController::class, 'index'])->name('invite');
        Route::post('send', [InviteController::class, 'send'])->name('invite.send');
    });
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users');
        Route::post('fetch', [UserController::class, 'fetch'])->name('users.fetch');
    });
    Route::prefix('roles')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('roles');
        Route::post('fetch', [RoleController::class, 'fetch'])->name('roles.fetch');
        Route::post('submit', [RoleController::class, 'submit'])->name('roles.submit');
        Route::post('edit', [RoleController::class, 'edit'])->name('roles.edit');
        Route::post('destroy', [RoleController::class, 'destroy'])->name('roles.destroy');
    });

    Route::prefix('permission')->group(function () {
        Route::get('/', [PermissionController::class, 'index'])->name('permission');
        Route::post('fetch', [PermissionController::class, 'fetch'])->name('permission.fetch');
        Route::post('submit', [PermissionController::class, 'submit'])->name('permission.submit');
        Route::post('edit', [PermissionController::class, 'edit'])->name('permission.edit');
        Route::post('destroy', [PermissionController::class, 'destroy'])->name('permission.destroy');
    });


});
