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

Route::get('register', 'Auth\RegisterController@index')->name('register');
Route::post('register', 'Auth\RegisterController@create');
Route::get('/', 'TodoController@index');
Route::post('/{name}', 'TodoController@postTodo');
Route::delete('/todo/{todo}', 'TodoController@deleteTodo');
Route::resource('/', 'TodoController');
