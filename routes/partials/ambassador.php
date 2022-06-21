<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ambassador\PostController;
use App\Http\Controllers\Ambassador\CommentController;
use App\Http\Controllers\Ambassador\LikeController;


Route::middleware(['auth','can:ambassador-views','email-verification'])->group(function () {
    Route::prefix('post')->group(function () {
        Route::post('store', [PostController::class, 'store'])->name('post.store');
        Route::delete('destroy', [PostController::class, 'destroy'])->name('post.destroy');
    });
    Route::prefix('comments')->group(function () {
        Route::post('store', [CommentController::class, 'store'])->name('comments.store');
    });
    Route::prefix('likes')->group(function () {
        Route::post('store', [LikeController::class, 'store'])->name('likes.store');
    });
});
