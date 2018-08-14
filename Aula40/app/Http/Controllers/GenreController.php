<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;

class GenreController extends Controller
{
    public function show($id){
      $genero = Genero::find($id);
      echo '<h1>'.$genero->name.'</h1>';
      echo '<h2>Lista de filmes com o genero '.$genero->name.' :</h2>';
      echo '<ul>';
      foreach ($genero->movies()->get() as $key => $value) {
          echo '<li>';
          echo $value['title'];
          echo '</li>';
      }
    }
}
