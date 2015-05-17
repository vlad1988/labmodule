<?php


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
Route::get('show/{id}', 'StudentController@show');
Route::post('create/student', 'StudentController@create');

/** Disciplines CRUD * */
Route::get('disciplines', 'DisciplineController@index');
Route::post('create/discipline', 'DisciplineController@create');




Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
