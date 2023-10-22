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
    return view('home');
})->name('home');

Route::get('product', function () {
    return view('product');
})->name('product');

Route::get('galery', function () {
    return view('galery');
})->name('galery');

Route::get('store', function () {
    return view('store');
})->name('store');

Route::get('ENTERPRENERURSHIP ', function () {
    return view('ENTERPRENERURSHIP ');
})->name('enterprener');

Route::get('register', function(){
    return view('register');
})->name('register');

Route::get('login', function(){
    return view('login');
})->name('login');