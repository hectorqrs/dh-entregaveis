<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    protected $table = "movies";

    public function getTitulo(){
      return $this->title;
    }

    public function getAvaliacao(){
      return $this->rating;
    }

    public function getPremios(){
      return $this->awards;
    }

    public function getDuracao(){
      return $this->length;
    }
}
