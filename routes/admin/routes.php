<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InviteController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;


Route::middleware('auth')->group(function () {
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


});
