<?php

namespace Illuminate\Auth\Middleware;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ParsingController;
use App\Http\Controllers\ReviewController;
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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', function() {
    return view('sections.home');
})->name('home');


Route::get('/logout', [AuthController::class, 'Logout'])->name('logout');
Route::get('/registrated', [AuthController::class, 'registrated'])->name('registrated');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register_process', [AuthController::class, 'register'])->name('register_process');  
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');

Route::get('/gismeteo', [ParsingController::class, 'parsing'])->middleware('auth')->name('parsing');

Route::get('/review_form', [ReviewController::class, 'showReviewForm'])->name('review_form');
Route::post('/review_process', [ReviewController::class, 'review'])->name('review_process');
Route::get('/reviews', [ReviewController::class, 'reviews'])->middleware('auth')->name('reviews');