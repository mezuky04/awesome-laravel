<?php

Route::get('/', 'HomeController@index');
Route::get('/submit-resource', 'SubmitResourceController@index');

Route::get('/login', 'LoginController@index')->middleware('guest');
Route::post('/login', 'LoginController@login')->middleware('guest');

Route::get('/logout', 'LoginController@logout')->middleware('auth');

//Route::auth();

//Route::get('/home', 'HomeController@index');

//Route::auth();

//Route::get('/home', 'HomeController@index');
