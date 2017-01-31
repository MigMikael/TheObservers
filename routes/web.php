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

Route::get('/', 'HomeController@index');

Auth::routes();

//Route::resource('problem', 'ProblemController');

Route::group(['middleware' => 'auth'], function (){

    Route::get('problem', 'ProblemController@index');
    Route::get('problem_next/{id}', 'ProblemController@nextProblem');
    Route::get('problem_prev/{id}', 'ProblemController@prevProblem');
    Route::post('reply_answer', 'ProblemController@replyAnswer');
    Route::get('score', 'UserController@scoreBoard');


    Route::group(['middleware' => 'adminAuth'], function (){

        Route::post('problem', 'ProblemController@store');
        Route::get('problem/create', 'ProblemController@create');
        Route::delete('problem/{id}', 'ProblemController@destroy');
        Route::patch('problem/{id}', 'ProblemController@update');
        Route::get('problem/{id}/edit', 'ProblemController@edit');
        Route::get('problem/{id}/change', 'ProblemController@change');
        Route::get('problem_show_all', 'ProblemController@showAll');
        Route::get('problem_hide_all', 'ProblemController@hideAll');
        Route::get('admin', 'ProblemController@admin');

    });

    Route::get('problem/{id}', 'ProblemController@show');
});

Route::get('inform/location/earth', 'ProblemController@handle1');
Route::post('ask_for_help', 'ProblemController@handle2');

