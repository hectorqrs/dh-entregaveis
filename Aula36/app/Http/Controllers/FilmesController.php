<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    private $filmes = [
              1 => "Toy Story",
              2 => "Procurando Nemo",
              3 => "Avatar",
              4 => "Star Wars: Episódio V",
              5 => "Up",
              6 => "Mary e Max"
              ];

    public function procurarFilmeId($id){
      return view('filmes')->with('filmes',$this->filmes)->with('id',$id);
    }


    public function procurarFilmeNome($nome){
      foreach ($this->filmes as $posicao => $filme) {
        if($nome == $filme){
          $resultado = $filme;
          break;
        }else{
          $resultado = "Não foram encontrados resultados";
        }
      }
      echo $resultado;
    }

    public function listarFilmes(){
     return view('filme')->with('filmes',$this->filmes);
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
