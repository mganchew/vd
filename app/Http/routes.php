<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');

Route::get('/info', 'PagesController@info');
Route::get('/registration', 'PagesController@registration');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/map', 'PagesController@map');
Route::get('/calendar', 'PagesController@calendar');