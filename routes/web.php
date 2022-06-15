<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ProfilesController;

Auth::routes();

Route::get('/sms', [SmsController::class, 'sms'])->name('sms');

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');
Route::post('/join', [ReferralController::class, 'join_as'])->name('join.as');
Route::get('/sign-up', [ReferralController::class, 'sign_up'])->name('sign.up');
Route::get('/user', [UserController::class, 'create'])->name('create');
Route::post('/user', [UserController::class, 'store'])->name('store');
Route::get('/referral-link/{name}/{id}', [ReferralController::class, 'referral_link'])->name('referral.link');

Route::post('forget-password/send-email', [ForgotPasswordController::class, 'send_email'])->name('forgot.send.email');
Route::get('forget-password/resend-email', [ForgotPasswordController::class, 'resend_email'])->name('forgot.resend.email');
Route::get('create-new-password/{id}/{token}', [ForgotPasswordController::class, 'create_new_password'])->name('forgot.create.new.password');
Route::post('forget-password/change-password', [ForgotPasswordController::class, 'change_password'])->name('forgot.change.password');


Route::group([],__DIR__.'/admin/routes.php');