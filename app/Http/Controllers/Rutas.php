<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use App\Categoria;
use App\Intro;
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

        $intro=Intro::findOrFail(1);
        $categorias=Categoria::all()->where('estado','0');
        return view('inicio',compact('categorias','libro','intro'));
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
        $contactos=Contacto::findOrFail(1);
        $categorias=Categoria::all()->where('estado','0'); 
       return view('contacto',compact('contactos','categorias'));
    }


      public function show($id)
    {
           $libro= Libro::join('categorias','libros.categoria_id','=','categorias.id')
        ->where('libros.categoria_id','=',$id)
        ->select('libros.titulo','libros.updated_at','libros.img','libros.archivo','libros.created_at','categorias.nombre','libros.id')->paginate(9);
        


        $categorias=Categoria::all()->where('estado','0');
        return view('show',compact('categorias','libro'));
    }




  
}
