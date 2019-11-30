<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use App\Categoria;

class Rutas extends Controller
{
      public function panel()
    {
      
        return view('panel.index');
    }

    public function index()
    {
        $libro=Libro::all()->where('estado','0');
        $categorias=Categoria::all()->where('estado','0');
        return view('inicio',compact('categorias'));
    }
}
