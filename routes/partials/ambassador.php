<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth','can:ambassador-views','email-verification'])->group(function () {
    Route::prefix('invite')->group(function () {
        Route::get('/', [InviteController::class, 'index'])->name('invite');
    });
});
