<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ambassador\PostController;
use App\Http\Controllers\Ambassador\AmbassadorDetailsController;
use App\Http\Controllers\Ambassador\CommentController;
use App\Http\Controllers\Ambassador\UserController;



Route::middleware(['auth','can:ambassador-views','email-verification'])->group(function () {
    Route::prefix('post')->group(function () {
        Route::post('store', [PostController::class, 'store'])->name('post.store');
        Route::delete('destroy', [PostController::class, 'destroy'])->name('post.destroy');
    });
    Route::prefix('ambassador')->group(function () {
        Route::post('update-name', [AmbassadorDetailsController::class, 'update_name'])->name('ambassador.update.name');
        Route::post('update-social-info', [AmbassadorDetailsController::class, 'update_social_info'])->name('ambassador.update.details');
    });

    Route::prefix('comments')->group(function () {
        Route::post('store', [CommentController::class, 'store'])->name('comments.store');
    });
    
});
