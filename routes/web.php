<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@index');

Route::get('/info', 'PagesController@info');
Route::get('/registration', 'PagesController@registration');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/map', 'PagesController@map');