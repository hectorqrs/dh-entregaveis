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

Route::get('/atores', 'AtoresController@directory');

Route::get('/atores/{id}', 'AtorController@procurar');

Route::get('/filme/{id}', 'FilmeController@informar');

Route::post('/atores/search', 'AtoresController@procurar');
