<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Articulo;

class TestController extends Controller
{
    public function view($id){

      $articulo = Articulo::find($id);
      $articulo->categoria;
      $articulo->usuario;
      $articulo->tags;
      return view('test.index',['articulo' => $articulo]);

    }
}
