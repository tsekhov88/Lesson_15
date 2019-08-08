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

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/news', 'NewsController@show'); 
Route::get('/login', 'Auth\LoginController@form'); 
Route::post('/login', 'Auth\LoginController@login');

Route::get('/addresses', 'AddressesController@index'); 
Route::post('/addresses', 'AddressesController@store');

Route::get('/books', 'BooksController@index'); 
Route::get('/books-add', 'BooksController@addPage'); 
Route::post('/books', 'BooksController@store');