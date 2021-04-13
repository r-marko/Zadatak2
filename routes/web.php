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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\Blog@home')->name('home');
Route::get('/login', 'App\Http\Controllers\Blog@login');
Route::get('/register', 'App\Http\Controllers\Blog@register');

Route::post('/', 'App\Http\Controllers\Blog@formblog')->name('form'); // Posting blog text

Route::post('/register', 'App\Http\Controllers\Blog@store')-> name('register');
Route::post('/login', 'App\Http\Controllers\Blog@loginstore')-> name('login');
Route::post('/logout', 'App\Http\Controllers\Blog@logout')-> name('logout');