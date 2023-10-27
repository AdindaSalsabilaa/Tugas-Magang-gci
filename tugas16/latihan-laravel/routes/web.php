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
    return view('index',[
      "title" => "welcome",
      "Judul" => "Halaman utama"
    ]);
});

Route::get('/home', function () {
    return view('home',[
      "title" => "Home",
      "Judul" => "Halaman Home"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "title" => "contact",
        "Judul" => "Halaman Contact"
      ]);
});


Route::get('/register', function () {
    return view('register',[
        "title" => "Registrasi",
        "Judul" => "Halaman register"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard',[
        "title" => "Dashboard",
        "Judul" => "Halaman Dashboard"
    ]);
});

Route::get('/tables', function () {
    return view('tables',[
        "title" => "Tables",
        "Judul" => "halaman tables"
      ]);
});


Route::get('/data-tables', function () {
    return view('data-tables',[
        "title" => "Data Tables",
        "Judul" => "Halaman Data Tabel"
    ]);
});


Route::get('/users', function () {
    return view('users',[
        "title" => "Users Table",
        "Judul" => "Halaman Users Tabel"
    ]);
});


Route::get('/profil-tables', function () {
    return view('profil-tables',[
        "title" => "Profil Tables",
        "Judul" => "Halaman Profil Tabel"
    ]);
});


Route::get('/data-tables', function () {
    return view('data-tables',[
        "title" => "Data Tables",
        "Judul" => "Halaman Data Tabel"
    ]);
});


Route::get('/data-tables', function () {
    return view('data-tables',[
        "title" => "Data Tables",
        "Judul" => "Halaman Data Tabel"
    ]);
});


Route::get('/data-tables', function () {
    return view('data-tables',[
        "title" => "Data Tables",
        "Judul" => "Halaman Data Tabel"
    ]);
});


Route::get('/data-tables', function () {
    return view('data-tables',[
        "title" => "Data Tables",
        "Judul" => "Halaman Data Tabel"
    ]);
});


Route::get('/data-tables', function () {
    return view('data-tables',[
        "title" => "Data Tables",
        "Judul" => "Halaman Data Tabel"
    ]);
});




