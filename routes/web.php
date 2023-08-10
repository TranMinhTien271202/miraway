<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAuth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'index']);
Route::resource('blogs', BlogController::class);
// Route::resource('users', UserController::class);
Route::get('login', [UserController::class, 'login'])->name('auth.login');
Route::post('login', [UserController::class, 'authlogin'])->name('auth.login.post');
Route::get('logout', [UserController::class, 'logout'])->name('auth.logout');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::get('users/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('users/{id}', [UserController::class, 'update'])->name('users.update');
