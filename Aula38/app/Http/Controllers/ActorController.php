<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atores;
use App\Filmes;

class ActorController extends Controller
{


  public function add(){
    $filmes = Filmes::all();
    return view('add')->with('filmes',$filmes);;
  }

  public function adicionar(Request $request){
    $this->validate($request,[
      'first_name' => 'required|max:30',
      'last_name' => 'max:100|required',
      'rating' => 'integer|required',
      'filme' => 'required'
    ]);
    $inserir = Atores::create([
      'first_name' =>$request->input('first_name'),
      'last_name' =>$request->input('last_name'),
      'rating' =>$request->input('rating'),
      'favorite_movie_id' =>$request->input('filme')
    ]);
    $sucesso = $inserir->save();
    $atores = Atores::all();
    return view('actors', ['request' => $request])
    ->with('sucesso',$sucesso)
    ->with('atores',$atores);
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

  // Aula 42

  public function Listar(){
    $atores = Atores::where('rating','>',7)->paginate(5);
    return view('actors')->with('atores',$atores);
  }

}
