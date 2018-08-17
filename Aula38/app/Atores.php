<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filmes;

class Atores extends Model
{
  protected $table = 'Actors';

  protected $fillable = ['first_name','rating','last_name','favorite_movie_id'];

  public function getNomeCompleto(){
    return $this->first_name." ".$this->last_name;
  }

  // Aula 42

  public function movies(){
    return $this->belongsToMany(Filmes::class, 'actor_movie', 'actor_id', 'movie_id');
  }
}
