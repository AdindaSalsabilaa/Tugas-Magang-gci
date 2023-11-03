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

Route::get('/', function () {return view('index');});
Route::get('/home', function () {return view('home');});
Route::get('/contact', function () { return view('contact');});
Route::get('/register', function () {return view('register');});
Route::get('/dashboard', function () {return view('dashboard');});
Route::get('/dashboardv2', function () {return view('dashboardv2');});
Route::get('/tables', function () {return view('tables');});
Route::get('/data-tables', function () {return view('data-tables');});
Route::get('/users', function () {return view('users');});
Route::get('/profil-tables', function () {return view('profil-tables');});

// Route::get('/cast', [app\Http\Controllers\CastController::class,'index']);
Route::get('/cast', [App\Http\Controllers\CastController::class, 'index']);
Route::get('/cast/create', [App\Http\Controllers\CastController::class, 'create']);
Route::post('/cast', [App\Http\Controllers\CastController::class, 'store']);
Route::get('/cast/edit/{id}', [App\Http\Controllers\CastController::class, 'edit']);
Route::get('/cast/{id}', [App\Http\Controllers\CastController::class, 'update']);
Route::get('/cast/show/{id}', [App\Http\Controllers\CastController::class, 'show']);
Route::post('/cast/delete/{id}', [App\Http\Controllers\CastController::class, 'delete']);


