<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Movie;

class Genre extends Model
{
    protected $table= 'genres';

    public function filmes(){
      return $this->hasMany(Movie::class, 'genre_id', 'id');
    }
}
