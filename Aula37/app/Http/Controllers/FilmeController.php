<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filmes;
use App\Atores;

class FilmeController extends Controller
{
    public function informar($id){
      $filme = Filmes::find($id);
      $atores = $filme->atores()->where('actor_movie.movie_id','=',$id)->get();
      return view('filme')->with('filme',$filme)->with('atores',$atores);
    }
}
