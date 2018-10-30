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

Route::get('/test', function() {
    return view('test');
});

Route::get('/', 	        'PageController@index');
Route::get('/page/bmi',     'PageController@renderBmi');
Route::post('/page/bmi',    'PageController@renderCalBmi');
Route::get('/page/bmr',     'PageController@renderBmr');

Route::post('/auth/login',      'AuthController@login');
Route::post('/auth/logout',     'AuthController@logout');

Route::group(['namespace' => 'User', 'prefix' => 'user'],
    function () {
        Route::get('/courses',              'CourseController@renderAll');
        Route::get('/courses/{id}',         'CourseController@renderOne');

        Route::get('/trainings',            'TrainingController@renderAll');
        Route::post('/trainings',           'TrainingController@create');
        Route::get('/trainings/{id}',       'TrainingController@renderOne');
        Route::patch('/trainings',          'TrainingController@update');

        Route::get('/nutritions',           'NutritionController@renderAll');

        Route::get('/practicerecords',      'PracticeRecordController@renderAll');
        Route::post('/practicerecords',     'PracticeRecordController@create');
        Route::get('/practicerecords/{id}', 'PracticeRecordController@renderOne');
        Route::patch('/practicerecords',    'PracticeRecordController@update');
        Route::delete('/practicerecords',   'PracticeRecordController@delete');

        Route::get('/effectrecords',        'EffectRecordController@renderAll');
        Route::post('/effectrecords',       'EffectRecordController@create');
        Route::get('/effectrecords/{id}',   'EffectRecordController@renderOne');
        Route::patch('/effectrecords',      'EffectRecordController@update');
        Route::delete('/effectrecords',     'EffectRecordController@delete');

        Route::post('/appeals',             'AppealController@create');
        Route::post('/comments',            'CommentController@create');
        Route::delete('/comments/{id}',     'CommentController@delete');
    }
);

Route::group(['namespace' => 'Trainer', 'prefix' => 'trainer'],
    function () {
        Route::get('/trainings',            'TrainingController@renderAll');
        Route::post('/trainings',           'TrainingController@create');
        Route::get('/trainings/{id}',       'TrainingController@renderOne');
        Route::patch('/trainings',          'TrainingController@update');
        Route::delete('/trainings',         'TrainingController@delete');

        Route::get('/courses',              'CourseController@renderAll');
        Route::post('/courses',             'CourseController@create');
        Route::get('/courses/{id}',         'CourseController@renderOne');
        Route::patch('/courses',            'CourseController@update');
        Route::delete('/courses',           'CourseController@delete');

        Route::get('/nutritions',           'NutritionController@renderAll');
        Route::post('/nutritions',          'NutritionController@create');
        Route::get('/nutritions/{id}',      'NutritionController@renderOne');
        Route::patch('/nutritions',         'NutritionController@update');
        Route::delete('/nutritions',        'NutritionController@delete');

        Route::get('/practicerecords',      'PracticeRecordController@renderAll');
        Route::get('/effectrecords',        'EffectRecordController@renderAll');
    }
);

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'],
    function () {
        Route::get('/trainings',            'TrainingController@renderAll');
        Route::post('/trainings',           'TrainingController@create');
        Route::get('/trainings/{id}',       'TrainingController@renderOne');
        Route::patch('/trainings',          'TrainingController@update');
        Route::delete('/trainings',         'TrainingController@delete');

        Route::get('/users',                'UserController@renderAll');
        Route::post('/users',               'UserController@create');
        Route::get('/users/{id}',           'UserController@renderOne');
        Route::patch('/users',              'UserController@update');
        Route::delete('/users',             'UserController@delete');
        
        Route::get('/courses',              'CourseController@renderAll');
        Route::post('/courses',             'CourseController@create');
        Route::get('/courses/{id}',         'CourseController@renderOne');
        Route::patch('/courses',            'CourseController@update');
        Route::delete('/courses',           'CourseController@delete');

        Route::get('/appeals',              'AppealController@renderAll');
        Route::delete('/appeals',           'AppealController@delete');

        Route::get('/comments',             'CommentController@renderAll');
        Route::delete('/comments',          'CommentController@delete');

        Route::get('/postures',             'PostureController@renderAll');
        Route::post('/postures',            'PostureController@create');
        Route::get('/postures/{id}',        'PostureController@renderOne');
        Route::patch('/postures',           'PostureController@update');
        Route::delete('/postures',          'PostureController@delete');

        Route::get('/photos',               'PhotoController@renderAll');
        Route::post('/photos',              'PhotoController@create');
        Route::get('/photos/{id}',          'PhotoController@renderOne');
        Route::patch('/photos',             'PhotoController@update');
        Route::delete('/photos',            'PhotoController@delete');

        Route::get('/videos',               'VideoController@renderAll');
        Route::post('/videos',              'VideoController@create');
        Route::get('/videos/{id}',          'VideoController@renderOne');
        Route::patch('/videos',             'VideoController@update');
        Route::delete('/videos',            'VideoController@delete');
    }
);