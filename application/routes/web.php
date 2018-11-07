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

Route::get('/storage/{dir}/{path}',  'FileController@getStorageFile');

Route::get('/', 	        'PageController@index');

Route::get('/page/me',      'PageController@renderUser');
Route::patch('/page/me',    'PageController@updateUser');

Route::get('/page/bmi',                     'PageController@renderBmi');
Route::post('/page/bmi',                    'PageController@renderCalBmi');
Route::get('/page/bmr',                     'PageController@renderBmr');
Route::get('/page/course',                  'PageController@renderCourses');

Route::get('/page/trainer/{user_id}',            'PageController@renderTrainerDetails');
Route::post('/page/trainer/{user_id}/post',      'PageController@createPost');
Route::post('/page/trainer/{user_id}/comment',   'PageController@createComment');
Route::post('/page/trainer/{user_id}/appeal',    'PageController@submitAppeal');
Route::post('/page/trainer/{user_id}/payment',   'PageController@submitPayment');
Route::post('/page/trainer/{user_id}/training',  'PageController@submitTraining');

Route::get('/page/search-users', 'PageController@renderAllUsers');

Route::post('/auth/register',   'AuthController@register');
Route::post('/auth/login',      'AuthController@login');
Route::post('/auth/logout',     'AuthController@logout');

Route::group(['namespace' => 'User', 'prefix' => 'user'],
    function () {
        Route::get('/trainings',            'TrainingController@renderAll');
        Route::get('/trainings/{id}',       'TrainingController@renderOne');
        Route::patch('/trainings/{id}',     'TrainingController@update');

        Route::post('/practicerecords',        'PracticeRecordController@create');
        Route::patch('/practicerecords/{id}',  'PracticeRecordController@update');
        Route::delete('/practicerecords/{id}', 'PracticeRecordController@delete');

        Route::post('/tabletrainings',          'TableTrainingController@create');
        Route::delete('/tabletrainings/{id}',   'TableTrainingController@delete');

        Route::get('/payments',             'PaymentController@renderAll');
        Route::patch('/payments/{id}',      'PaymentController@update');
    }
);

Route::group(['namespace' => 'Trainer', 'prefix' => 'trainer'],
    function () {
        Route::get('/trainings',            'TrainingController@renderAll');
        Route::get('/trainings/{id}',       'TrainingController@renderOne');
        Route::patch('/trainings/{id}',     'TrainingController@update');

        Route::post('/practicerecords',        'PracticeRecordController@create');
        Route::patch('/practicerecords/{id}',  'PracticeRecordController@update');
        Route::delete('/practicerecords/{id}', 'PracticeRecordController@delete');

        Route::post('/nutritions',              'NutritionController@create');
        Route::patch('/nutritions/{id}',        'NutritionController@update');

        Route::post('/tabletrainings',          'TableTrainingController@create');
        Route::delete('/tabletrainings/{id}',   'TableTrainingController@delete');

        Route::get('/courses',              'CourseController@renderAll');
        Route::post('/courses',             'CourseController@create');
        Route::get('/courses/{id}',         'CourseController@renderOne');
        Route::patch('/courses/{id}',       'CourseController@update');
        Route::delete('/courses/{id}',      'CourseController@delete');

        Route::get('/payments',             'PaymentController@renderAll');
        Route::patch('/payments/{id}',      'PaymentController@update');
    }
);

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'],
    function () {
        Route::get('/users',                'UserController@renderAll');
        Route::patch('/users/{id}',         'UserController@update');

        Route::get('/appeals',              'AppealController@renderAll');
        Route::delete('/appeals/{id}',      'AppealController@delete');

        // Route::get('/postures',             'PostureController@renderAll');
        // Route::post('/postures',            'PostureController@create');
        // Route::get('/postures/{id}',        'PostureController@renderOne');
        // Route::patch('/postures',           'PostureController@update');
        // Route::delete('/postures',          'PostureController@delete');

        // Route::get('/photos',               'PhotoController@renderAll');
        // Route::post('/photos',              'PhotoController@create');
        // Route::get('/photos/{id}',          'PhotoController@renderOne');
        // Route::patch('/photos',             'PhotoController@update');
        // Route::delete('/photos',            'PhotoController@delete');

        // Route::get('/videos',               'VideoController@renderAll');
        // Route::post('/videos',              'VideoController@create');
        // Route::get('/videos/{id}',          'VideoController@renderOne');
        // Route::patch('/videos',             'VideoController@update');
        // Route::delete('/videos',            'VideoController@delete');
    }
);
