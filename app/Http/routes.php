<?php

Route::get('/', 'HomeController@index');
Route::get('o-kompanii', 'PageController@o_kompanii');

// News
Route::get('/news', 'NewsController@getIndex');
Route::get('/news/{title}', 'NewsController@getItem');

// Links
Route::get('links', 'FileController@getIndex');
Route::get('links/{cat}', 'FileController@getCategory');
Route::get('links/{cat}/peskostrujnie-risunki', 'FileController@pesok');

Route::get('links/{cat}/{item}', 'FileController@getItem');
// special Links
Route::get('links/{cat}/vitrajnie-risunki', 'FileController@vitraj');

// FAQ
Route::get('/faq', 'FAQController@getIndex');
Route::get('/faq/{cat}', 'FAQController@getCategory');
Route::get('/faq/{cat}/{item}', 'FAQController@getItem');




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('welcome', 'WelcomeController@index');


Route::get('backend', 'BackendController@index');

Route::get('categories', 'CategoryController@all');
//Route::get('{slug}', 'CategoryController@showpage');

// Route::get('{slug}', array('as' => 'category', 'uses' => 'CategoryController@show'))
//    ->where('slug', Category::$slugPattern);