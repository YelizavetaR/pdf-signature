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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/features', function () {
    return view('features');
});

Route::get("/user", "UserController@index");
// Route::post("/login", App\Http\CO)

Auth::routes();

Route::get('/user/premium', [App\Http\Controllers\UserController::class, 'premium'])->middleware('auth')->name('premium');
// Route::get('/user/premium', [App\Http\Controllers\UserController::class, 'index'])->middleware('auth')->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');