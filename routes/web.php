<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\ReferralController;

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sms', [SmsController::class, 'sms'])->name('sms');
Route::get('/sign-up', [ReferralController::class, 'sign_up'])->name('sign.up');
Route::get('/user', [UserController::class, 'create'])->name('create');
Route::post('/user', [UserController::class, 'store'])->name('store');
Route::get('/verify', [UserController::class, 'Getverify'])->name('getverify');
Route::post('/verify', [UserController::class, 'Postverify'])->name('postverify');
//Route::get('/user', 'UserController@create');


Route::get('/referral-link/{name}/{id}', [ReferralController::class, 'referral_link'])->name('referral.link');

Route::prefix('admin')->group(function () {

});

// INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `phone`, `email_verified_at`, `password`, `gender`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'Super', 'Admin', 'super_admin', 'super@admin.com', '+923001231231', NULL, '$2y$10$D4qxG3pfH3FkDbbkyGKRi.qdGdi0DcwKlqnnLKB6jtdW.c2fGj/.G', '', '1', NULL, '2022-06-13 21:37:13', '2022-06-13 21:37:13');