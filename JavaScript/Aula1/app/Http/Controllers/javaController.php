<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class javaController extends Controller
{
    public function show(){
      return view('index');
    }
}