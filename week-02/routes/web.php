<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;

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

// Route /hello → menampilkan string "Hello World"
Route::get('/hello', [WelcomeController::class, 'hello']);

// Route /world → menampilkan string "World"
Route::get('/world', function () {
    return 'World';
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

/*
|--------------------------------------------------------------------------
| PRAKTIKUM 1 - REDIRECTS   
|--------------------------------------------------------------------------
*/
Route::get('/here', function () {
    return redirect()->to(url('/hello'));
});

/*
|--------------------------------------------------------------------------
| PRAKTIKUM 1 - VIEW 
|--------------------------------------------------------------------------
*/
Route::view('/welcome', 'welcome');

/*
|-------------------------------------------------------------------------- 
| PRAKTIKUM 2 - PAGE CONTROLLER 
|-------------------------------------------------------------------------- 
*/
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);
