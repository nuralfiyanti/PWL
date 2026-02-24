<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// Home
Route::get('/', [HomeController::class, 'index']);

// Products & Categories
Route::get('/products', [ProductController::class, 'index']);
Route::get('/category/{type}', [ProductController::class, 'category']);

// User dengan parameter
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// Sales
Route::get('/sales', [SalesController::class, 'index']);