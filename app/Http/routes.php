<?php


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

/** Groups CRUD * */
Route::get('groups', 'HomeController@groups');
Route::get('group/{id}', 'HomeController@group');
Route::post('groups', 'HomeController@creategroup');

Route::get('delete/{id}', 'HomeController@deletegroupview');
Route::post('deletegroup', 'HomeController@deletegroup');

Route::get('edit/{id}', 'HomeController@editgroupview');
Route::post('editgroup', 'HomeController@editgroup');

/** Srudents CRUD * */
Route::get('students', 'StudentController@index');
Route::get('show/{id}', 'StudentController@show');
Route::get('report/{student_id}/{discipline_id}', 'StudentController@report');

Route::post('create/student', 'StudentController@create');
Route::post('addtolist', 'StudentController@addtolist');
Route::post('item/remove', 'StudentController@listbrake');
Route::post('studentlist', 'StudentController@studentlist');


/** Disciplines CRUD * */
Route::get('disciplines', 'DisciplineController@index');
Route::get('discipline/edit/{id}', 'DisciplineController@edit');
Route::get('disciplines/show', 'DisciplineController@show');
Route::get('discipline/show/{id}', 'DisciplineController@show');

Route::post('create/discipline', 'DisciplineController@create');
Route::post('discipline/remove/{id}', 'DisciplineController@destroy');
Route::post('discipline/store', 'DisciplineController@store');

Route::get('sum', 'StudentController@sumreport');


/** Scheme CRUD **/
Route::post('create/scheme', 'SchemeController@create');
Route::get('download/{filename}', function($filename){
	$file_path = base_path() . '/public/catalog/'. $filename;
	return Response::download($file_path);
});

/** Report CRUD **/
Route::post('createreport', 'ReportController@create');
Route::get('reportlist/{discipline_id}/{group_id}', 'ReportController@reportlist');
Route::get('showreport/{discipline_id}/{student_id}', 'ReportController@show');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
