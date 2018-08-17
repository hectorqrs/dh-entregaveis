<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class novoController extends Controller
{

    public function show(){
      $filmes = [
        [ 'titulo' => 'Titanic',  'preco' => 10],
        [ 'titulo' => 'Avatar',  'preco' => 12],
        [ 'titulo' => 'Star Wars' , 'preco' => 3]
      ];

      $novos = collect($filmes)->sortBy('preco');
      echo $novos."<br>";
    }
}
