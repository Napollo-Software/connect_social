<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');


// INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `created_at`, `updated_at`) VALUES (1, 'Administrator', 1, 'super_admin@connect.com', '$2y$10$D4qxG3pfH3FkDbbkyGKRi.qdGdi0DcwKlqnnLKB6jtdW.c2fGj/.G', '2022-06-10 16:24:09', '2022-06-10 16:24:09');