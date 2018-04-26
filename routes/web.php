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
Route::get('empresa', 'PaginasController@getEmpresa');
Route::get('contato', 'PaginasController@getContato');
Route::get('conteudo', 'PaginasController@getConteudo');
Route::get('/', 'PaginasController@getIndex');
Route::resource('posts', 'PostController');
