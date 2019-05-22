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
Auth::routes();
Route::get('/', 'HomeController@index')->name('index');

Route::get('/sendMollie', 'sendMollieController@index')->name('sendMollie');

Route::get('/bankAccounts', 'RekeningenBeheerController@index')->name('bankAccounts');
Route::get('/create', 'RekeningenBeheerController@create')->name('create');
Route::get('/edit', 'RekeningenBeheerController@edit')->name('edit');
Route::post('/store', 'RekeningenBeheerController@store');
Route::post('/delete', 'RekeningenBeheerController@destroy');
Route::post('/edit/{id}', 'RekeningenBeheerController@update')->name('update');

Route::get('/home', 'HomeController@index')->name('home');
