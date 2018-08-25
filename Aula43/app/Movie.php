<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Actor;

class Movie extends Model
{
    protected $table = 'movies';

    public function actors(){
      return $this->belongsToMany(Actor::class,'actor_movie','movie_id','actor_id');
    }
}
