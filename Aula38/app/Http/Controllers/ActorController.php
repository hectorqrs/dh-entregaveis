<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atores;

class ActorController extends Controller
{
  public function add(){
    return view('add');
  }

  public function adicionar(Request $request){
    $this->validate($request,[
      'first_name' => 'unique:actors|required|max:30',
      'last_name' => 'max:100|required',
      'rating' => 'integer|required'
    ]);
    return view('add', ['request' => $request]);
  }
}
