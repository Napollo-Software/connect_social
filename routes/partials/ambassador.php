<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ambassador\PostController;
use App\Http\Controllers\Ambassador\CommentController;
use App\Http\Controllers\Ambassador\UserController;
use App\Http\Controllers\Ambassador\LikeController;
use App\Http\Controllers\Ambassador\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Ambassador\FriendsController;
use App\Http\Controllers\Ambassador\ConnectionsController;


Route::middleware(['auth','can:ambassador-views','email-verification'])->group(function () {
    Route::prefix('post')->group(function () {
        Route::post('store', [PostController::class, 'store'])->name('post.store');
        Route::post('update', [PostController::class, 'update'])->name('post.update');
        Route::delete('destroy', [PostController::class, 'destroy'])->name('post.destroy');
        Route::delete('asset-destroy', [PostController::class, 'asset_destroy'])->name('post.asset.destroy');
    });
    Route::get('profile-view/{id?}', [HomeController::class, 'index'])->name('ambassador.profile.view');
    Route::prefix('ambassador')->group(function () {
        Route::post('update-name', [UserController::class, 'update_name'])->name('ambassador.update.name');
        Route::post('update-about', [UserController::class, 'update_about'])->name('ambassador.update.about');
        Route::post('update-cover', [UserController::class, 'update_cover'])->name('ambassador.update.cover');
        Route::post('update-profile', [UserController::class, 'update_profile'])->name('ambassador.update.profile');
        Route::post('update-privacy', [UserController::class, 'update_privacy'])->name('ambassador.update.privacy');
        Route::post('update-social-info', [UserController::class, 'update_social_info'])->name('ambassador.update.social.info');
        Route::post('show-control', [UserController::class, 'show_control'])->name('ambassador.show.control');
    });
    Route::prefix('comments')->group(function () {
        Route::post('store', [CommentController::class, 'store'])->name('comments.store');
    });
    Route::prefix('gallery')->group(function () {
        Route::get('{type?}', [GalleryController::class, 'index'])->name('gallery');
    });
    Route::prefix('likes')->group(function () {
        Route::post('store', [LikeController::class, 'store'])->name('likes.store');
    });
    Route::prefix('friends')->group(function () {
        Route::post('send-request', [FriendsController::class, 'send_request'])->name('friends.send.request');
        Route::post('cancel-request', [FriendsController::class, 'cancel_request'])->name('friends.cancel.request');
        Route::post('remove-request', [FriendsController::class, 'remove_friend'])->name('friends.remove.friend');
        Route::post('action', [FriendsController::class, 'action'])->name('friends.action');
    });
    Route::prefix('connections')->group(function () {
        Route::post('send-request', [ConnectionsController::class, 'send_request'])->name('connections.send.request');
        Route::post('action', [ConnectionsController::class, 'action'])->name('connections.action');
        Route::post('cancel-request', [ConnectionsController::class, 'cancel_request'])->name('connections.cancel.request');
        Route::post('remove-connection', [ConnectionsController::class, 'remove_connection'])->name('connections.remove.connection');


    });

});
