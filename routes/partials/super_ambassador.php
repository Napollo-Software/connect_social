<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InviteController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;


Route::middleware(['auth','can:super-ambassador-views','email-verification'])->group(function () {
    Route::prefix('invite')->group(function () {
        Route::get('/', [InviteController::class, 'index'])->name('invite');
        Route::post('send', [InviteController::class, 'send'])->name('invite.send');
    });
});
