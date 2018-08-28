<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function nome(){
      return view('dashboard');
    }

    public function adicionar(){
      $generos = Genre::all();
      return view('form')->with('generos',$generos);
    }

    public function validar(Request $request){
      $this->validate($request,[
        'title' => 'required|unique:movies|max:255',
        'rating' => 'numeric|max:10|required',
        'awards' => 'integer|required',
        'length' => 'integer|min:120|required',
        'release_date' => 'date|required',
        'genre' => 'required'
      ]);
      $inserir = Movie::create([
        'title' => $request->input('title'),
        'rating' => $request->input('rating'),
        'awards' => $request->input('awards'),
        'length' => $request->input('length'),
        'release_date' => $request->input('release_date'),
        'genre_id' => $request->input('genre')
      ]);
      $inserir->save();

      return view('home');
    }
}
