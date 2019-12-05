<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use App\Categoria;
use App\Contacto;
use App\Paginator;

class Rutas extends Controller
{


    public function index()
    {
        

         $libro= Libro::join('categorias','libros.categoria_id','=','categorias.id')
        ->where('categorias.estado','=',0 )
        ->select('libros.titulo','libros.updated_at','libros.img','libros.archivo','libros.created_at','categorias.nombre','libros.id')->orderBy('id', 'DESC')->take(6)
        ->get();


        $categorias=Categoria::all()->where('estado','0');
        return view('inicio',compact('categorias','libro'));
    }



    public function librosGeneral()
    {
        

         $libro= Libro::join('categorias','libros.categoria_id','=','categorias.id')
        ->where('categorias.estado','=',0 )
        ->select('libros.titulo','libros.updated_at','libros.img','libros.archivo','libros.created_at','categorias.nombre','libros.id')->orderBy('id', 'DESC')->paginate(9);
        


        $categorias=Categoria::all()->where('estado','0');
        return view('general',compact('categorias','libro'));
    }


    public function contacto()
    {
      $categorias=Categoria::all()->where('estado','0');
        return view('contacto',compact('categorias'));
    }




  
}
