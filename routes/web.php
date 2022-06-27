<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('home', function () {
    return view('home');
})->name('name');

route::post('logout', [LogoutController::class, 'store'])->name('logout');

route::get('/login', [LoginController::class, 'index'])->name('login');
route::post('/login', [LoginController::class, 'store']);

route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

route::get('/register', [RegisterController::class, 'index'])->name('register');
route::post('/register', [RegisterController::class, 'store']);

route::get('/posts', [PostsController::class, 'index'])->name('posts')->middleware('auth');
route::post('/posts', [PostsController::class, 'store']);
