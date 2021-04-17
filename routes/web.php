


<?php


use Illuminate\Support\Facades\Route;
use App\http\Controllers\PostLikeController;
use App\http\Controllers\PostController;
use App\http\Controllers\Auth\RegisterController;
use App\http\Controllers\Auth\LoginController;
use App\http\Controllers\Auth\LogoutController;
use App\http\Controllers\DashboardController;

Route::get('/', function () {
return view('home');
})->name('home');


Route::get('/dashboard', [DashboardController::class, 'index'])
->name('dashboard');




Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'store']);


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');
