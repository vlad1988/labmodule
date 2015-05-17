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

/** Groups CRUD * */
Route::get('groups', 'HomeController@groups');
Route::post('groups', 'HomeController@creategroup');

Route::get('delete/{id}', 'HomeController@deletegroupview');
Route::post('deletegroup', 'HomeController@deletegroup');

Route::get('edit/{id}', 'HomeController@editgroupview');
Route::post('editgroup', 'HomeController@editgroup');

/** Srudents CRUD * */
Route::get('students', 'StudentController@index');



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
