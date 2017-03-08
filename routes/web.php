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

Route::get('/', 'MainController@Index');
Route::get('/about', 'MainController@About');
Route::get('/drone', 'MainController@Drone');
Route::get('/contact', 'MainController@Contact');
