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

Route::get('/', function () {
    return view('welcome');
});


Route::get('room/add','RoomController@create');
Route::post('room/add','RoomController@store');
Route::get('/room','RoomController@index');
Route::get('room/edit/{id}','RoomController@edit');
Route::post('room/edit/{id}','RoomController@update');
Route::delete('room/{id}','RoomController@destroy');

Route::get('user/add','UserController@create');
Route::post('user/add','UserController@store');
Route::get('/users','UserController@index');
Route::get('user/edit/{id}','UserController@edit');
Route::post('user/edit/{id}','UserController@update');
Route::delete('user/{id}','UserController@destroy');

Route::get('matricula/add','MatriculaController@create');
Route::post('matricula/add','MatriculaController@store');
Route::get('/matricula','MatriculaController@index');
Route::get('matricula/edit/{id}','MatriculaController@edit');
Route::post('matricula/edit/{id}','MatriculaController@update');
Route::delete('matricula/{id}','MatriculaController@destroy');

Route::get('curso/add','CursoController@create');
Route::post('curso/add','CursoController@store');
Route::get('/cursos','CursoController@index');
Route::get('curso/edit/{id}','CursoController@edit');
Route::post('curso/edit/{id}','CursoController@update');
Route::delete('curso/{id}','CursoController@destroy');