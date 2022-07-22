<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ambassador\PostController;
use App\Http\Controllers\Ambassador\CommentController;
use App\Http\Controllers\Ambassador\UserController;
use App\Http\Controllers\Ambassador\LikeController;
use App\Http\Controllers\Ambassador\GalleryController;
use App\Http\Controllers\Ambassador\FriendsController;
use App\Http\Controllers\Ambassador\ConnectionsController;
use App\Http\Controllers\Ambassador\ChatController;
use App\Http\Controllers\Ambassador\SearchController;
use App\Http\Controllers\Ambassador\NetworkController;
use App\Http\Controllers\Ambassador\SendInviteController;
use App\Http\Controllers\Ambassador\KycController;
use App\Http\Controllers\Ambassador\WalletController;
use App\Http\Controllers\Ambassador\ReceiptController;
use App\Http\Controllers\TransactionController;

Route::middleware(['auth', 'can:ambassador-views', 'email-verification'])->group(function () {


    
    Route::prefix('post')->group(function () {
        Route::post('fetch', [PostController::class, 'fetch'])->name('post.fetch');
        Route::post('fetch-all', [PostController::class, 'fetch_all'])->name('post.fetch.all');
        Route::post('store', [PostController::class, 'store'])->name('post.store');
        Route::post('update', [PostController::class, 'update'])->name('post.update');
        Route::post('pop-up', [PostController::class, 'popup'])->name('post.popup');
        Route::delete('destroy', [PostController::class, 'destroy'])->name('post.destroy');
        Route::delete('asset-destroy', [PostController::class, 'asset_destroy'])->name('post.asset.destroy');
    });
    Route::prefix('comments')->group(function () {
        Route::post('store', [CommentController::class, 'store'])->name('comments.store');
        Route::post('show-more', [CommentController::class, 'show_more'])->name('comments.show.more');
    });
    Route::prefix('likes')->group(function () {
        Route::post('store', [LikeController::class, 'store'])->name('likes.store');
    });
    Route::prefix('search')->group(function () {
        Route::get('', [SearchController::class, 'index'])->name('search');
        Route::post('fetch', [SearchController::class, 'fetch'])->name('search.fetch');
        Route::post('fetch-dropdown', [SearchController::class, 'fetch_dropdown'])->name('search.dropdown');
    }); 
    Route::prefix('chat')->group(function () {
        Route::get('/{id?}', [ChatController::class, 'index'])->name('chat');
        Route::post('fetch-users', [ChatController::class, 'fetch_users'])->name('chat.users');
        Route::post('store', [ChatController::class, 'store'])->name('chat.store');
        Route::post('fetch', [ChatController::class, 'fetch'])->name('chat.fetch');
        Route::post('mark-as-read', [ChatController::class, 'mark_as_read'])->name('chat.mark.as.read');
    });
    Route::prefix('profile-view')->group(function () {
        Route::get('{id}', [NetworkController::class, 'profile'])->name('network.profile');
        Route::get('network/{id}/{type}', [NetworkController::class, 'network'])->name('network.list');
    });

    Route::middleware('under-construction')->group(function () {
        Route::prefix('ambassador')->group(function () {
            Route::post('fetch-network', [UserController::class, 'fetch'])->name('ambassador.fetch.network');
            Route::post('update-name', [UserController::class, 'update_name'])->name('ambassador.update.name');
            Route::post('update-about', [UserController::class, 'update_about'])->name('ambassador.update.about');
            Route::post('update-cover', [UserController::class, 'update_cover'])->name('ambassador.update.cover');
            Route::post('update-profile', [UserController::class, 'update_profile'])->name('ambassador.update.profile');
            Route::post('update-privacy', [UserController::class, 'update_privacy'])->name('ambassador.update.privacy');
            Route::post('update-social-info', [UserController::class, 'update_social_info'])->name('ambassador.update.social.info');
            Route::post('show-control', [UserController::class, 'show_control'])->name('ambassador.show.control');
            Route::get('', [UserController::class, 'index'])->name('ambassador.profile');

            Route::prefix('receipts')->group(function () {
                Route::get('', [ReceiptController::class, 'index'])->name('ambassador.receipts');
                Route::post('store', [ReceiptController::class, 'store'])->name('ambassador.receipts.store');
            });

        });      
        Route::prefix('gallery')->group(function () {
            Route::get('{type}', [GalleryController::class, 'index'])->name('gallery');
            Route::post('fetch', [GalleryController::class, 'fetch'])->name('gallery.fetch');
            Route::post('delete', [GalleryController::class, 'delete'])->name('gallery.delete');
        });    
        Route::prefix('network')->group(function () {
            Route::get('{type}/{id?}', [NetworkController::class, 'index'])->name('network');
            Route::post('', [NetworkController::class, 'fetch'])->name('network.fetch');
            Route::post('change-privacy', [NetworkController::class, 'change_privacy'])->name('network.change.privacy');
        });
        Route::prefix('friends')->group(function () {
            Route::get('list/{id?}', [FriendsController::class, 'show'])->name('friends.show');
            Route::post('send-request', [FriendsController::class, 'send_request'])->name('friends.send.request');
            Route::post('cancel-request', [FriendsController::class, 'cancel_request'])->name('friends.cancel.request');
            Route::post('remove-request', [FriendsController::class, 'remove_friend'])->name('friends.remove.friend');
            Route::post('action', [FriendsController::class, 'action'])->name('friends.action');
        });
        Route::prefix('connections')->group(function () {
            Route::get('list/{id?}', [ConnectionsController::class, 'show'])->name('connections.show');
            Route::post('send-request', [ConnectionsController::class, 'send_request'])->name('connections.send.request');
            Route::post('action', [ConnectionsController::class, 'action'])->name('connections.action');
            Route::post('cancel-request', [ConnectionsController::class, 'cancel_request'])->name('connections.cancel.request');
            Route::post('remove-connection', [ConnectionsController::class, 'remove_connection'])->name('connections.remove.connection');
        });

        Route::prefix('kyc')->group(function () {
            Route::get('submission', [KycController::class, 'submission'])->name('kyc.submission');
            Route::post('submit', [KycController::class, 'submit'])->name('kyc.submit');
            Route::get('response', [KycController::class, 'kyc_response'])->name('kyc.response');
        });
        Route::prefix('transactions')->group(function () {
            Route::post('ambassador/fetch', [TransactionController::class, 'fetch'])->name('transactions.ambassador.fetch');
        });
        Route::prefix('wallet')->group(function () {
            Route::get('dashboard', [WalletController::class, 'dashboard'])->name('wallet.dashboard');
        });
        Route::prefix('networks')->group(function () {
            Route::get('dashboard', [NetworkController::class, 'dashboard'])->name('network.dashboard');
        });

    });
    Route::prefix('send-invite-email')->group(function () {
        Route::post('for-referral', [SendInviteController::class, 'send_invite'])->name('send.invite.for.referral');
    });
});