<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filmes;

class FilmesController extends Controller
{
    public function procurarFilmeId($id){
      $filmes = Filmes::find($id);
      return view('filmes')->with('filmes',$filmes->getTitulo());
    }


    public function procurarFilmeNome($nome){
      $resultado = Filmes::where('title','=',$nome)->get();
      if (count($resultado) > 0) {
        echo $resultado[0]->getTitulo();
      }else{
        echo 'Filme não encontrado';
      }
    }

    public function listarFilmes(){
      $filmes = Filmes::all();
     return view('filme')->with('filmes',$filmes);
    }

    public function AdicionarFilme($filme){
      $array = array_search($filme,$this->filmes);
        if($array){
          echo "O filme já existe no array";
        }else{
          array_push($this->filmes,$filme);
          echo "Filme Adicionado com sucesssoooooo</br>";
        }
        var_dump($this->filmes);
        }
}
