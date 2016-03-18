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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::resource('pages', 'PagesController');

Route::resource('articles', 'ArticlesController');

Route::resource('contentareas', 'ContentAreasController');

Route::resource('csstemplates', 'cssTemplatesController');

Route::resource('users', 'UsersController');

Route::resource('site', 'SiteController');



Route::controllers([
   'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);