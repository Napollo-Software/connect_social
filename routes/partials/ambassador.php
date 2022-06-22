<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ambassador\PostController;
use App\Http\Controllers\Ambassador\CommentController;
use App\Http\Controllers\Ambassador\UserController;
use App\Http\Controllers\Ambassador\LikeController;


Route::middleware(['auth','can:ambassador-views','email-verification'])->group(function () {
    Route::prefix('post')->group(function () {
        Route::post('store', [PostController::class, 'store'])->name('post.store');
        Route::post('update', [PostController::class, 'update'])->name('post.update');
        Route::delete('destroy', [PostController::class, 'destroy'])->name('post.destroy');
        Route::delete('asset-destroy', [PostController::class, 'asset_destroy'])->name('post.asset.destroy');
    });

    Route::prefix('ambassador')->group(function () {
        Route::post('update-name', [UserController::class, 'update_name'])->name('ambassador.update.name');
        Route::post('update-about', [UserController::class, 'update_about'])->name('ambassador.update.about');
        Route::post('update-cover', [UserController::class, 'update_cover'])->name('ambassador.update.cover');
        Route::post('update-profile', [UserController::class, 'update_profile'])->name('ambassador.update.profile');
        Route::post('update-social-info', [UserController::class, 'update_social_info'])->name('ambassador.update.social.info');
    });

    Route::prefix('comments')->group(function () {
        Route::post('store', [CommentController::class, 'store'])->name('comments.store');
    });
    Route::prefix('likes')->group(function () {
        Route::post('store', [LikeController::class, 'store'])->name('likes.store');
    });
});
