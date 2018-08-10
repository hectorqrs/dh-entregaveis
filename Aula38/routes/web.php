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

Route::get('/form' , 'FormController@form');
Route::post('/form' , 'FormController@adicionar');

/*Listar Atores */

Route::get('/actors' , 'ActorController@Listar');

// Adicionar Ator

Route::get('/actors/add' , 'ActorController@add');
Route::post('/actors/add' , 'ActorController@adicionar');

// Atualizar Ator

Route::get('/actor/form_edit/{id}', 'ActorController@edit');
Route::put('/actor/edit/{id}', 'ActorController@update');

// Deletar Atore

Route::get('/actor/delete/{id}', 'ActorController@destroy');
