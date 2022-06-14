<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InviteController;


Route::middleware('auth')->group(function () {
    Route::prefix('invite')->group(function () {
        Route::get('/', [InviteController::class, 'index'])->name('invite');
        Route::post('send', [InviteController::class, 'send'])->name('invite.send');
    });
});
