<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ambassador\PostController;


Route::middleware(['auth','can:ambassador-views','email-verification'])->group(function () {
    Route::prefix('post')->group(function () {
        Route::post('store', [PostController::class, 'store'])->name('post.store');
    });
});
