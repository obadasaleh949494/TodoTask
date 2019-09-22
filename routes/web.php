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

Route::get('/' , 'TodoController@getPage');
Route::get('/tasks' , 'TaskController@getTasks');
Route::post('/tasks' , 'TaskController@createTask');
Route::put('/tasks/{id}' , 'TaskController@updateTask');
Route::delete('/tasks/{id}' , 'TaskController@deleteTask');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
