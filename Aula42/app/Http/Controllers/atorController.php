<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ator;
use App\Filme;

class atorController extends Controller
{
    public function show(){
      $atores = Ator::where('rating','>','7')->paginate(5);
      return view('atores')->with('atores',$atores);
    }
}
