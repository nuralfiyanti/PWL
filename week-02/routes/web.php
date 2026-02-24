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

/*
|--------------------------------------------------------------------------
PRAKTIKUM 1 - ROUTING DASAR
|--------------------------------------------------------------------------
*/

// Route default (/) → menampilkan halaman utama
Route::get('/', function () {
    return 'Selamat Datang';
});

// Route /hello → menampilkan string "Hello World"
Route::get('/hello', function () {
    return 'Hello World';
});

// Route /world → menampilkan string "World"
Route::get('/world', function () {
    return 'World';
});

// Route /about → menampilkan NIM dan Nama
Route::get('/about', function () {
    return 'NIM : 244107020055 <br> Nama : Nur Alfiyanti';
});


/*
|--------------------------------------------------------------------------
| PRAKTIKUM 1 - ROUTE PARAMETERS
|--------------------------------------------------------------------------
*/

// Route parameter wajib
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

// Route dengan 2 parameter
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route parameter artikel
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});


/*
|--------------------------------------------------------------------------
| PRAKTIKUM 1 - OPTIONAL PARAMETERS
|--------------------------------------------------------------------------
*/

// Route parameter opsional
Route::get('/user-optional/{name?}', function ($name = 'John') {
    return 'Nama saya '.$name;
});


/*
|--------------------------------------------------------------------------
| PRAKTIKUM 1 -ROUTE NAME
|--------------------------------------------------------------------------
*/

// Route dengan nama 'profile'
Route::get('/user/profile', function () {
    return 'Halaman Profile';
})->name('profile');

Route::get('/test-profile', function () {
    return route('profile');
});

/*
|--------------------------------------------------------------------------
| PRAKTIKUM 1 - ROUTE GROUP DAN ROUTE PREFIXES
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

    Route::get('/user', function () {
        return 'Halaman Admin User';
    });

    Route::get('/post', function () {
        return 'Halaman Admin Post';
    });

});