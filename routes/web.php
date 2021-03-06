<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\ReferralController; 
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\Auth\VerifyCodeController; 
use App\Http\Controllers\FrontEnd;

Auth::routes(['verify' => true]);

Route::get('/sms', [SmsController::class, 'sms'])->name('sms');
Route::get('/sign-up', [ReferralController::class, 'sign_up'])->name('sign.up');
Route::get('/user', [UserController::class, 'create'])->name('create');
Route::post('/user', [UserController::class, 'store'])->name('store');
Route::get('/referral/{name}/{id}', [ReferralController::class, 'referral_link'])->name('referral.link');

Route::post('forget-password/send-email', [ForgotPasswordController::class, 'send_email'])->name('forgot.send.email');
Route::get('forget-password/resend-email', [ForgotPasswordController::class, 'resend_email'])->name('forgot.resend.email');
Route::get('create-new-password/{id}/{token}', [ForgotPasswordController::class, 'create_new_password'])->name('forgot.create.new.password');
Route::post('forget-password/change-password', [ForgotPasswordController::class, 'change_password'])->name('forgot.change.password');

Route::post('verify-email-code', [VerifyCodeController::class, 'verify_code'])->name('email.verify.code');
Route::get('resend-email-code', [VerifyCodeController::class, 'resend_code'])->name('email.resend.code');

Route::get('/', [HomeController::class, 'index'])->middleware(['email-verification','auth'])->name('home');
Route::group([],__DIR__.'/partials/super_admin.php');
Route::group([],__DIR__.'/partials/ambassador.php'); 

// Frontend Routes
Route::get('/front-end', [FrontEnd::class, 'index']);
Route::get('/under-construction', [FrontEnd::class, 'under_construction'])->name('site.under.construction');

// Wallet
// Route::get('/front-end/wallet/dashboard', [FrontEnd::class, 'wallet_dashboard']);
Route::get('/front-end/wallet/add-card', [FrontEnd::class, 'add_card']);
Route::get('/front-end/wallet/pacakge', [FrontEnd::class, 'packages']);
Route::get('test', [FrontEnd::class, 'index']);
Route::post('order-post', [FrontEnd::class, 'orderPost'])->name('order-post');

