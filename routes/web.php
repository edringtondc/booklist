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

//define resource routes first
Route::resource('book', 'BooksController');

//home page
Route::get('/', function () {
    return redirect()->route('book.index');
});

// Route::get('/', function()
// {
//     return User::all();
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
