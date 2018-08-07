<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filmes;

class FilmeController extends Controller
{
    public function informar($id){
      $filme = Filmes::find($id);
      return view('filme')->with('filme',$filme);
    }
}
