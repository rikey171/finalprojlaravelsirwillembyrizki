<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/movies', [App\Http\Controllers\MoviesController::class, 'index']);
Route::post('movies/create' , [App\Http\Controllers\MoviesController::class, 'create']);
Route::get('/movies/{id}/edit', [App\Http\Controllers\MoviesController::class, 'edit']);
Route::post('/movies/{id}/update', [App\Http\Controllers\MoviesController::class, 'update']);
Route::get('/movies/{id}/delete', [App\Http\Controllers\MoviesController::class, 'delete']);



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');



// Display the registration form
Route::get('register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');

// Handle registration form submission
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
