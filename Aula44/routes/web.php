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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@nome');

Route::get('/filmes/add', 'HomeController@adicionar');
Route::post('/filmes/add', 'HomeController@validar');

Route::get('/user/edit', 'UserController@edit')->middleware('manutencao');
Route::put('/user/edit/{id}', 'UserController@update');
