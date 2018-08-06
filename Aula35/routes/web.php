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

Route::get('/meuPrimeiroCaminho', function () {
    echo "Criei meu primeiro Caminho Laravel";
});

Route::get('/resultado/{numero}/{outro?}', function ($numero,$outro = null){
  if($outro == null){
    if($numero%2 == 0){
      echo "O número inserido é par";
    }else{
      echo "O número inserido é impar";
    }
  }else{
    return $outro * $numero;
  }
});
