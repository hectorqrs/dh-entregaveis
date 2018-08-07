<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atores;

class AtorController extends Controller
{
    public function procurar($id){
      $ator = Atores::find($id);
      return view('ator')->with('ator',$ator->getNomeCompleto());
    }
}
