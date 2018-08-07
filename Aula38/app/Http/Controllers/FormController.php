<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filmes;

class FormController extends Controller
{
    public function form(){
      return view('form');
    }

    public function adicionar(Request $request){
      $this->validate($request,[
        'title' => 'unique:movies|required|max:30',
        'rating' => 'min:0|max:10|numeric|required',
        'awards' => 'integer|required',
        'length' => 'integer|required'
      ]);
      return view('form', ['request' => $request]);
    }
}
