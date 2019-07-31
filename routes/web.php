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
// Route::get('books/authorSort', function (){
//     return view('books.authorSort');
// })->name('authorSort');
// Route::get('books', 'BooksController@authorSort'); // note the name() method.

Route::get('/books/authorSort', 'BooksController@authorSort')->name('books.authorSort');
Route::get('/books/search', 'BooksController@search')->name('books.search');
//define resource routes first
Route::resource('books', 'BooksController');

Route::get('json-api', 'ApiController@index');
//home page
Route::get('/', function () {
    return redirect()->route('books.index');
});






// Route::get('books/authorSort','BooksController@authorSort');






// Route::get('/', function()
// {
//     return User::all();
// });

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
