<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atores extends Model
{
    protected $table = 'actors';

    public function getNomeCompleto(){
      return $this->first_name." ".$this->last_name;
    }

    public function getAvaliacao(){
      return $this->rating;
    }

    public function getId(){
      return $this->id;
    }
}
