<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atores;

class AtoresController extends Controller
{
      public function directory(){
        $atores = Atores::all();
        return view('atores')->with('atores',$atores);
      }

      public function directory2(){
        $atores = Atores::join('movies','movies.id','=','actors.favorite_movie_id')->get();
        return view('atores')->with('atores',$atores);
      }

      public function procurar(Request $request){
        $atores = Atores::where('first_name','=',$request->input('nome'))->get();
        return view('procurar')->with('atores',$atores);
      }
}
