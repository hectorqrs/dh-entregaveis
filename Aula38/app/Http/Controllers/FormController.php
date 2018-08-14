<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filmes;
use App\Genero;

class FormController extends Controller
{
    public function form(){
      $generos = Genero::all();
      return view('form')->with('generos',$generos);
    }

    public function adicionar(Request $request){
      $this->validate($request,[
        'title' => 'unique:movies|required|max:30',
        'rating' => 'min:0|max:10|numeric|required',
        'awards' => 'integer|required',
        'length' => 'integer|required',
        'data_lançamento' => 'required',
        'genero' => 'required'
      ]);
      $inserir = Filmes::create([
        'title' => $request->input('title'),
        'rating' => $request->input('rating'),
        'awards' => $request->input('awards'),
        'length' => $request->input('length'),
        'release_date' => $request->input('data_lançamento'),
        'genre_id' =>$request->input('genero')
      ]);
      $sucesso = $inserir->save();
      $generos = Genero::all();

      return view('form', ['request' => $request])->with('sucesso',$sucesso)->with('generos',$generos);
    }
}
