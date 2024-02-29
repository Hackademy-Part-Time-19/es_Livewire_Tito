<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.welcome');
})->name('home');

Route::get('/counter', function () {
    return view('pages.view-counter');
})->name('counter');

Route::get('/users', function () {
    return view('pages.view-user');
})->name('user');

Route::get('/posts', function () {
    return view('pages.view-posts');
})->name('post');
