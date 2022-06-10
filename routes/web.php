<?php

use Illuminate\Support\Facades\Route;
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `created_at`, `updated_at`) VALUES (NULL, 'Administrator', '1', 'super_admin@connect.com', '$2y$10$D4qxG3pfH3FkDbbkyGKRi.qdGdi0DcwKlqnnLKB6jtdW.c2fGj/.G', '2022-06-10 21:24:09', '2022-06-10 21:24:09');