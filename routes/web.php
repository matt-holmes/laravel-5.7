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
Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/about-us', 'PagesController@about');

// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{project}', 'ProjectsController@update');
// Route::delete('/projects/{project}', 'ProjectsController@destroy');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('projects', 'ProjectsController');
    Route::patch('tasks/{task}', 'TasksController@update');
    Route::post('projects/{project}/tasks', 'TasksController@store');
});

// app()->singleton('example', function(){
//     return new \App\Example(new \App\Foo);
// });
//
// Route::get('service-container', function(){
//     dd(app('example'), app('\App\Example'));
// });


Route::get('/home', 'HomeController@index')->name('home');
// Route::get('login', 'LoginController@show');
// Route::post('login', 'LoginController@do');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
