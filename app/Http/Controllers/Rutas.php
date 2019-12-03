<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use App\Categoria;
use App\Paginator;

class Rutas extends Controller
{
      public function panel()
    {
      
        return view('panel.index');
    }

    public function index()
    {
        $libro=Libro::where('estado','0')->orderBy('id', 'DESC')->take(6)->get();
        $categorias=Categoria::all()->where('estado','0');
        return view('inicio',compact('categorias','libro'));
    }


  
}
