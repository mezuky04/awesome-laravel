<?php

Route::get('/', 'HomeController@index');
Route::get('/submit-resource', 'SubmitResourceController@index');
Route::post('/submit-resource', 'SubmitResourceController@submitResource');

Route::get('/get-categories', 'SubmitResourceController@getCategories');
Route::get('/get-resources/{categoryName}', 'ResourcesController@getResources');
Route::get('/get-resources', 'ResourcesController@getLastResources');

Route::get('/login', 'LoginController@index')->middleware('guest');
Route::post('/login', 'LoginController@login')->middleware('guest');

Route::get('/logout', 'LoginController@logout')->middleware('auth');

Route::group(['prefix' => 'admin-center', 'namespace' => 'AdminCenter'], function() {
    Route::get('/', 'AdminCenterController@index')->middleware('auth');
    Route::get('/get-pending-requests', 'AdminCenterController@getPendingRequests')->middleware('auth');
    Route::get('/accept-resource-request/{resourceId}', 'AdminCenterController@acceptResourceRequest')->middleware('auth');
    Route::get('/decline-resource-request/{resourceId}', 'AdminCenterController@declineResourceRequest')->middleware('auth');
});
