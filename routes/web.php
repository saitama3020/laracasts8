<?php


use App\Services\Twitter;

Route::get('/', function (Twitter $twitter) {

    dd($twitter);

    return view('welcome');
});

Route::resource('projects', 'ProjectsController');


Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::post('/completed-tasks/{task}', 'CompletedTaskController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTaskController@destroy');
