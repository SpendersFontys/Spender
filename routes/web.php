<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product', function () {
    return view('product', []);
})->name('product');

Route::get('/team', function () {
    return view('team', []);
})->name('team');

Route::get('/contact', function () {
    return view('contact', []);
})->name('contact');