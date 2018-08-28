<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function edit(){
    return view('user');
  }

  public function update(Request $request, $id){
    $usuario = User::find($id);
    $usuario->name = $request->input('name');
    $usuario->email = $request->input('email');
    $usuario->phone = $request->input('phone');
    $usuario->save();
    return redirect('home');
  }
}
