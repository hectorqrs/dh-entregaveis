<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Generos;
use App\Atores;


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

    public function genero(){
      return $this->hasOne(Generos::class,'id','genre_id');
    }

    public function atores(){
      return $this->belongsToMany(Atores::class, 'actor_movie', 'movie_id','actor_id');
    }
}
