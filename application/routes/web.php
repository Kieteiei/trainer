<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/api/showuser',     'JsonController@showuser');
Route::get('/api/showcourse',   'JsonController@showcourse');

Route::get('/', 	            'PageController@index');
Route::get('/api/showusers',    'PageController@showuser');

// Route::get('/showdata',     'UserController@update');
Route::get('/api/home',             'UserController@homefrom');
Route::get('/api/homeuser',         'UserController@homeuser');
Route::get('/api/homeadmin',        'UserController@homeadmin');
Route::get('/api/hometrainer',      'UserController@hometrainer');
Route::get('/api/user',             'UserController@userfrom');
Route::get('/api/register',         'UserController@registerform');
Route::post('/api/register',        'UserController@register');
Route::post('/api/updates',         'UserController@updates');
Route::post('/api/registerlogin',   'UserController@login');
Route::post('/api/Loginfacebook',   'UserController@Loginfacebook');
Route::post('/api/userSearch',      'UserController@search');
Route::get('/api/updateuser',       'UserController@update');
Route::get('/logout',               'UserController@logout');
Route::get('/sql',                  'UserController@sql');

Route::get('/api/course',               'CourseController@show');
Route::post('/api/course',              'CourseController@save');
Route::post('/api/courseupdate',        'CourseController@update');
Route::post('/api/courseupdateAPI',     'CourseController@updateAPI');
Route::post('/api/coursedelete',        'CourseController@delete');
Route::post('/api/coursedeletejson',    'CourseController@deletejson');
Route::post('/api/coursewhere',         'CourseController@where');

Route::get('/course',                   'CourseController@courseform');
Route::get('/updatecourse',             'CourseController@courseformupdate');
Route::get('/deletecourse',             'CourseController@courseformdelete');

Route::get('/nutrition',                'NutritionController@nutritionform');
Route::post('/api/nutrition',           'NutritionController@save');
Route::post('/api/nutritionupdate',     'NutritionController@update');
Route::post('/api/nutritiondelete',     'NutritionController@delete');

Route::get('/practicerecord',               'PracticeRecordController@prform');
Route::post('/api/practicerecord',          'PracticeRecordController@save');
Route::post('/api/practicerecordupdate',    'PracticeRecordController@update');
Route::post('/api/practicerecorddelete',    'PracticeRecordController@delete');

Route::get('/effectrecord',                 'EffecTrecordController@erform');
Route::post('/api/effectrecord',            'EffecTrecordController@save');
Route::post('/api/effectrecordupdate',      'EffecTrecordController@update');
Route::post('/api/effectrecorddelete',      'EffecTrecordController@delete');

Route::get('/appeal',               'AppealController@appealform');
Route::get('/appeal_admin',         'AppealController@appealadmin');
Route::post('/api/appeal',          'AppealController@save');
Route::post('/api/appealupdate',    'AppealController@update');
Route::post('/api/appealdelete',    'AppealController@delete');

Route::get('/comment',              'CommentController@commentform');
Route::get('/comment_admin',        'CommentController@commentadmin');
Route::post('/api/comment',         'CommentController@save');
Route::post('/api/commentupdete',   'CommentController@update');
Route::post('/api/commentdelete',   'CommentController@delete');

Route::get('/posture',              'PostursController@postureform');
Route::post('/api/posture',         'PostursController@save');
Route::post('/api/postureupdate',   'PostursController@update');
Route::post('/api/posturedelete',   'PostursController@delete');


Route::get('/photo',          'PhotoController@photoform');
Route::post('/api/photo',     'PhotoController@save');

Route::get('/bmi',          'bmiController@bmiform');
Route::get('/bmr',          'bmiController@bmrform');
Route::post('/api/bmi',     'bmiController@bmi');

Route::get('/video',        'VideoController@videoform');
Route::post('/api/video',   'VideoController@save');
