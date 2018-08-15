<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filme;

class Ator extends Model
{
    protected $table = 'actors';

    public function movies(){
      return $this->belongsToMany(Filme::class,'actor_movie','actor_id','movie_id');
    }
}
