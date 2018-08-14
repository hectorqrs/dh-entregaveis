<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filmes;

class Genero extends Model
{
    protected $table = 'genres';

    public function movies(){
      return $this->hasMany(Filmes::class,'genre_id','id');
    }
}
