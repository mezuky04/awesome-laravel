<?php

Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
