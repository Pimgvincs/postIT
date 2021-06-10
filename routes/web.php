<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('tweets', App\Http\Controllers\TweetsController::class);

Route::post('comments', [App\Http\Controllers\CommentController::class, 'store']);
Route::get('/search/', [App\Http\Controllers\TweetsController::class, 'search'])->name('search');
Route::get('profile', [App\Http\Controllers\UsersController::class, 'index'])->name('profile');



