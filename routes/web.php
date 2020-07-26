<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//User Routing Controller

Route::get('/user', 'UserController@HomeUser');
Route::post('/upload','UserController@UserAvatar');

//ToDolist Routing Controller
Route::get('/todos/index', 'TodoController@index')->name('todo.index');;

Route::get('/todos/create', 'TodoController@create');
Route::post('/todos/create', 'TodoController@store');
Route::get('/todos/{todo}/edite', 'TodoController@edit');
Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update');
Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
