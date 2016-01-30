<?php
Route::get('/', 'HomeController@index');
Route::get('o-kompanii', 'PageController@o_kompanii');
Route::get('sitemap', 'CategoryController@sitemap');
            // uri      // route name       // controller action
Route::get('contacts',  ['as' => 'contacts', 'uses' => 'PageController@contacts']);
Route::post('contacts', ['as' => 'sendmail', 'uses' => 'PageController@sendmail']);

//Route::get('contacts', 'PageController@testmail');
//Route::post('contacts', 'PageController@sendmail');

// News
Route::get('news', 'NewsController@getIndex');
Route::get('news/{title}', 'NewsController@getItem');

// Links
Route::get('links', 'FileController@getIndex');
Route::get('links/{cat}', 'FileController@getCategory');
Route::get('links/catalogs/peskostrujnie-risunki', 'FileController@pesok');

Route::get('links/{cat}/{item}', 'FileController@getItem');
// special Links
Route::get('links/{cat}/vitrajnie-risunki', 'FileController@vitraj');

// FAQ
Route::get('faq', 'FAQController@getIndex');
Route::get('faq/{cat}', 'FAQController@getCategory');
Route::get('faq/{cat}/{item}', 'FAQController@getItem');

// Steklo
Route::get('izdeliya-iz-stekla', 'StekloController@getIndex');
Route::get('izdeliya-iz-stekla/{cat}', 'StekloController@getCategory');
Route::get('izdeliya-iz-stekla/{cat}/{item}', 'StekloController@getItem');

// Foto
Route::get('foto', 'ImageController@getIndex');
Route::get('foto/{item}', 'ImageController@getItem');

// Uslugi
Route::get('uslugi', 'UslugiController@getIndex');
Route::get('uslugi/{item}', 'UslugiController@getItem');

// Furnitura
Route::get('furnitura-dlya-stekla', 'FurnituraController@getIndex');
Route::get('furnitura-dlya-stekla/{cat2}/{cat3?}/{cat4?}', 'FurnituraController@getCategory');
Route::get('furnitura/{item}', 'FurnituraController@getItem');



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