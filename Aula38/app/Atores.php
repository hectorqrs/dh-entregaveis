<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atores extends Model
{
  protected $table = 'Actors';

  protected $fillable = ['first_name','rating','last_name'];
}
