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

Route::get('/', 'PagesController@index');
Route::get('/bmi','PagesController@bmi');
Route::get('/result','PagesController@result');
Route::get('/guess','PagesController@guess');
Route::get('/solution','PagesController@solution');

?>