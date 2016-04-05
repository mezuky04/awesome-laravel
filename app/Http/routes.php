<?php

Route::get('/', 'HomeController@index');
Route::get('/submit-resource', 'SubmitResourceController@index');
Route::post('/submit-resource', 'SubmitResourceController@submitResource')->middleware('auth');

Route::get('/get-categories', 'SubmitResourceController@getCategories');
Route::get('/get-resources/{categoryName}', 'ResourcesController@getResources');
Route::get('/get-resources', 'ResourcesController@getTopResources');
Route::get('/increment-clicks/{resourceId}', 'ResourcesController@incrementClicks');

Route::get('/login/github', 'LoginController@redirectToProvider')->middleware('guest');
Route::get('/login/github/callback', 'LoginController@handleProviderCallback')->middleware('guest');

Route::get('/logout', 'LoginController@logout')->middleware('auth');

Route::group(['prefix' => 'admin-center', 'namespace' => 'AdminCenter', 'middleware' => 'role:admin'], function() {
    Route::get('/', 'AdminCenterController@index');
    Route::get('/get-pending-requests', 'AdminCenterController@getPendingRequests');
    Route::get('/accept-resource-request/{resourceId}', 'AdminCenterController@acceptResourceRequest');
    Route::get('/decline-resource-request/{resourceId}', 'AdminCenterController@declineResourceRequest');
});
