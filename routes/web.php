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

Route::get('/products/add', 'ProductsController@add');
Route::post('/products/store', 'ProductsController@store');
Route::get('/products/{product}', 'ProductsController@show');
Route::get('/products', 'ProductsController@index');



Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}/update', 'ProfilesController@update')->name('profile.update');
