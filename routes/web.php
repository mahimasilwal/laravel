<?php

use App\Http\Controllers\moviesController;
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


Route::view('/home', 'index');
Route::view('/genre', 'Genre');
Route::view('/movies', 'movies');
Route::view('/login', 'LogIn');
Route::view('/signup', 'SignUp');
Route::view('/profile', 'UserProfile');
Route::view('/privacy', 'PrivacyPolicy');
Route::view('/about', 'AboutUs');
Route::view('/contact', 'ContactUs');
Route::view('/faq', 'FAQ');
Route::view('/movie', 'Movie');
Route::view('/AdminPanel', 'AdminPanel');

Route::get('/movies', [moviesController::class, 'movies'])->name('Movies');
Route::get('/AdminPanel', [moviesController::class, 'AdminPanel'])->name('AdminPanel');
Route::post('/AdminPanel-store', [moviesController::class, 'store'])->name('AdminPanel');