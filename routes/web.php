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


//Route::get('men/{price?}', 'Product\ProductController@listMenProducts')->name('men');
//Route::get('women', 'Product\ProductController@listWomenProducts')->name('women');
//Route::get('{slug}', 'Product\ProductController@show')->name('show');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/men', 'ProductController@getMenProducts')->name('men');
Route::get('/women', 'ProductController@getWomenProducts')->name('women');
Route::get('/men/{slug}', 'ProductController@show');

Route::redirect('/', "/home"); // index page to do later