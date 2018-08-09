<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    protected $table = 'movies';

    public function getTitulo(){
      return $this->title;
    }
}
