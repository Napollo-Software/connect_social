<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\ProfilesController;

Auth::routes();

Route::get('/sms', [SmsController::class, 'sms'])->name('sms');

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');
Route::post('/join', [ReferralController::class, 'join_as'])->name('join.as');
Route::get('/sign-up', [ReferralController::class, 'sign_up'])->name('sign.up');
Route::get('/user', [UserController::class, 'create'])->name('create');
Route::post('/user', [UserController::class, 'store'])->name('store');
Route::get('/verify', [UserController::class, 'Getverify'])->name('getverify');
Route::post('/verify', [UserController::class, 'Postverify'])->name('postverify');
//Route::get('/user', 'UserController@create');


Route::get('/referral-link/{name}/{id}', [ReferralController::class, 'referral_link'])->name('referral.link');



Route::group([],__DIR__.'/admin/routes.php');

// INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `phone`, `country_code`, `email_verified_at`, `password`, `gender`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'Super', 'Admin', 'super_admin', 'super@admin.com', '+923001231231','+92', NULL, '$2y$10$D4qxG3pfH3FkDbbkyGKRi.qdGdi0DcwKlqnnLKB6jtdW.c2fGj/.G', '', '1', NULL, '2022-06-13 21:37:13', '2022-06-13 21:37:13');