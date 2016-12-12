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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('users','UsersController@index');

Route::get('tickets', 'TicketsController@index');
Route::post('tickets/{ticket}/delete', 'TicketsController@delete');
Route::get('tickets/{ticket}', 'TicketsController@show');
