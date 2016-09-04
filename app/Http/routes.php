<?php
//Route::post('*', 'PostController@callback');

// admin section
Route::get('schel4ok', ['as' => 'admin', 'uses' => 'BackendController@index']);
Route::get('login', ['as' => 'login', 'uses' => 'BackendController@login']);
Route::get('password', ['as' => 'password', 'uses' => 'BackendController@password']);



Route::post('/', ['as' => 'callback', 'uses' => 'PostController@callback']);
// this route allows sending callback request from every page!!! but I don't know why?


Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('o-kompanii', ['as' => 'about-us', 'uses' => 'PageController@o_kompanii']);
Route::get('sitemap', ['as' => 'sitemap', 'uses' => 'CategoryController@sitemap']);

// named routes  
// With a named route, you can link to it in your application views using {{ URL::route('contacts') }}
// more info here https://scotch.io/tutorials/simple-and-easy-laravel-routing
            // uri      // route name       // controller action
Route::get('contacts',  ['as' => 'contacts', 'uses' => 'PageController@contacts']);
Route::post('contacts', ['as' => 'sendmail', 'uses' => 'PageController@sendmail']);

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
Route::post('izdeliya-iz-stekla/{cat}/{item}', ['as' => 'order', 'uses' => 'PostController@order']);


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

