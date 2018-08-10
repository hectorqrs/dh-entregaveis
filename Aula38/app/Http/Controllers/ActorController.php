<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atores;

class ActorController extends Controller
{
  public function Listar(){
    $atores = Atores::all();
    return view('actors')->with('atores',$atores);
  }

  public function add(){
    return view('add');
  }

  public function adicionar(Request $request){
    $this->validate($request,[
      'first_name' => 'required|max:30',
      'last_name' => 'max:100|required',
      'rating' => 'integer|required'
    ]);
    $inserir = Atores::create([
      'first_name' =>$request->input('first_name'),
      'last_name' =>$request->input('last_name'),
      'rating' =>$request->input('rating')
    ]);
    $sucesso = $inserir->save();
    $atores = Atores::all();
    return view('actors', ['request' => $request])->with('sucesso',$sucesso)->with('atores',$atores);
  }

  public function edit($id){
    $ator = Atores::find($id);
    return view('form_edit')->with('ator',$ator);
  }

  public function update(Request $request,$id){
    $ator = Atores::find($id);
    $ator->first_name = $request->input('first_name');
    $ator->last_name = $request->input('last_name');
    $ator->rating = $request->input('rating');
    $ator->save();
    return redirect('/actors');
  }

  public function destroy($id){
    $ator = Atores::find($id);
    $ator->delete();
    return redirect('/actors');
  }
}
