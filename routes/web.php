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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return view('service');
});
Route::get('/news', function () {
    return view('news');
});

Route::get('/About Us', function () {
    return view('About Us');
});
Route::get('/Info', function () {
    return view('Info');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
