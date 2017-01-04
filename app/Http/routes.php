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

Route::get('/', 'NewsController@home');


Route::get('/quantum.html', 'NewsController@quantum');

Route::get('/good.html', 'NewsController@good');

Route::get('/news.html', 'NewsController@show');

Route::get('/categoryId/{categoryId}.html', 'NewsController@news');

Route::get('/{categoryId}/{id}.html', 'NewsController@inner');

Route::get('/about.html', 'NewsController@about');

Route::get('/ab.html', 'NewsController@ab');

Route::get('/nfbm.html', 'NewsController@nfbm');

Route::get('/rwm.html', 'NewsController@rwm');

Route::get('/uv.html', 'NewsController@uv');