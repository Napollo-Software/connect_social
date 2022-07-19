<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InviteController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\KycController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\AmbassadorReceiptsController;

Route::middleware(['auth', 'can:super-admin-views', 'email-verification'])->group(function () {
    Route::get('profile', [UserController::class, 'profile'])->name('users.profile');
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users');
        Route::post('fetch', [UserController::class, 'fetch'])->name('users.fetch');
        Route::get('view/{id}',[UserController::class,'view'])->name('users.view');
    });
    Route::prefix('referral-link')->group(function () {
        Route::post('store', [ReferralController::class, 'store'])->name('referral.link.store');
    }); 

    Route::prefix('roles')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('roles');
        Route::post('fetch', [RoleController::class, 'fetch'])->name('roles.fetch');
        Route::post('submit', [RoleController::class, 'submit'])->name('roles.submit');
        Route::post('edit', [RoleController::class, 'edit'])->name('roles.edit');
        Route::post('destroy', [RoleController::class, 'destroy'])->name('roles.destroy');
    });

    Route::prefix('permission')->group(function () {
        Route::get('/', [PermissionController::class, 'index'])->name('permission');
        Route::post('fetch', [PermissionController::class, 'fetch'])->name('permission.fetch');
        Route::post('submit', [PermissionController::class, 'submit'])->name('permission.submit');
        Route::post('edit', [PermissionController::class, 'edit'])->name('permission.edit');
        Route::post('destroy', [PermissionController::class, 'destroy'])->name('permission.destroy');
    });
    Route::prefix('ambassador_receipts')->group(function () {
        Route::get('/', [AmbassadorReceiptsController::class, 'index'])->name('admin.ambassador.receipt');
        Route::post('fetch', [AmbassadorReceiptsController::class, 'fetch'])->name('admin.ambassador.receipt.fetch');
        Route::post('action', [AmbassadorReceiptsController::class, 'action'])->name('admin.ambassador.receipt.action');

    });

    Route::prefix('invite')->group(function () {
        Route::get('/', [InviteController::class, 'index'])->name('invite');
        Route::post('send', [InviteController::class, 'send'])->name('invite.send');
    });

    Route::middleware('under-construction')->group(function () {
        Route::prefix('kyc')->group(function () {
            Route::get('/', [KycController::class, 'index'])->name('kyc');
            Route::post('fetch', [KycController::class, 'fetch'])->name('kyc.fetch');
            Route::post('action', [KycController::class, 'action'])->name('kyc.action');
            Route::get('show/{id}', [KycController::class, 'show'])->name('kyc.show');
        });
    });

    Route::prefix('configurations')->group(function(){
        Route::get('/merchant',[ConfigurationController::class,'merchantConfig'])->name('merchant.config');
        Route::get('/ambassador',[ConfigurationController::class,'ambassadorConfig'])->name('ambassador.config');
        Route::post('/update-ambassador-configuration',[ConfigurationController::class, 'updateAmbassadorConfig'])->name('update.ambassador.config');
    });

 
});
