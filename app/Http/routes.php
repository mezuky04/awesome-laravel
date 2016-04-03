<?php

Route::get('/', 'HomeController@index');
Route::get('/submit-resource', 'SubmitResourceController@index');
Route::post('/submit-resource', 'SubmitResourceController@submitResource');

Route::get('/get-categories', 'SubmitResourceController@getCategories');
Route::get('/get-resources/{categoryName}', 'ResourcesController@getResources');
Route::get('/get-resources', 'ResourcesController@getTopResources');
Route::get('/increment-clicks/{resourceId}', 'ResourcesController@incrementClicks');

Route::get('/login', 'LoginController@index')->middleware('guest');
Route::post('/login', 'LoginController@login')->middleware('guest');
Route::get('/login/github', 'LoginController@redirectToProvider');
Route::get('/login/github/callback', 'LoginController@handleProviderCallback');

Route::get('/logout', 'LoginController@logout')->middleware('auth');

Route::group(['prefix' => 'admin-center', 'namespace' => 'AdminCenter', 'middleware' => 'role:admin'], function() {
    Route::get('/', 'AdminCenterController@index');
    Route::get('/get-pending-requests', 'AdminCenterController@getPendingRequests');
    Route::get('/accept-resource-request/{resourceId}', 'AdminCenterController@acceptResourceRequest');
    Route::get('/decline-resource-request/{resourceId}', 'AdminCenterController@declineResourceRequest');
});
