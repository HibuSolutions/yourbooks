<?php

namespace App\Http\Controllers;

use App\Libro;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;


class LibroController extends Controller
{

    public function index()
    {   $libros= Libro::join('categorias','libros.categoria_id','=','categorias.id')
    ->where('categorias.estado','=',0)
    ->select('libros.titulo','libros.updated_at','libros.img','libros.archivo','libros.created_at','categorias.nombre','libros.id')
    ->get();
        
        return view ('panel.libro.libros',compact('libros'));
    }



    public function create()
    {
       $categorias=Categoria::all()->where('estado','0'); 
       return view ('panel.libro.create',compact('categorias'));
    }


    public function store(Request $request)
    {
        
        $this->validate($request,[
            'titulo'=>'required|max:200',
            'descripcion' => ['required', 'string'],
            'archivo' => 'required|mimes:pdf,doc,docx',
            'file' => 'required|mimes:jpg,jpeg,png',
       ],

        [
            'titulo.max' => 'Máximo 200 caracteres para el nombre',
            'archivo.required' => 'suba solo libros en pdf,doc,docx',
            'archivo.mimes' => 'suba solo libros en pdf,doc,docx',

        ]);

    
        
        
        $ruta=$request->file('file')->store('portadas');
        $ruta2=$request->file('archivo')->store('libros');
       

        $libro = new Libro;
        $libro->titulo = $request->titulo;
        $libro->descripcion = $request->descripcion;
        $libro->categoria_id= $request->categoria;
        $libro->img=$ruta;
        $libro->archivo=$ruta2;
        $libro->save();
        return redirect('libro')->with('libro','libro agregado correctamente');
      
    
    }

    public function show($id)
    {
        $libro=Libro::findOrFail($id);
        $categorias=Categoria::all()->where('estado','0'); 
        return view('view',compact('libro','categorias'));
    }




    public function edit($id)
    {

        $categorias=Categoria::all()->where('estado','0');
        $libro=Libro::findOrFail($id);
        return view('panel.libro.edit',compact('categorias','libro'));
    }




    public function update(Request $request,  $id)
    {
            static $ruta,$rutaA;

            
            $libro=request()->except(['_token','_method']);

            if($request->hasFile('imagen') &&  $request->hasFile('archivo')){
                $borrar=Libro::findOrFail($id);
                Storage::disk('local')->delete('app',$borrar->img);
                Storage::disk('local')->delete('app',$borrar->archivo);
                $ruta=$request->file('imagen')->store('portadas');
                $rutaA=$request->file('archivo')->store('libros');

                $libro = Libro::findOrFail($id);
                $libro->titulo=$request->titulo;
                $libro->img=$ruta;
                $libro->categoria_id=$request->categorias_id;
                $libro->archivo=$rutaA;
                $libro->descripcion=$request->descripcion;
                $libro->save();
                  return redirect('libro')->with('libro','libro editado correctamente');
            }elseif ($request->hasFile('imagen')) {
                $borrar=Libro::findOrFail($id);
                Storage::disk('local')->delete('app',$borrar->img);
                $ruta=$request->file('imagen')->store('portadas');
                $libro = Libro::findOrFail($id);
                $libro->titulo=$request->titulo;
                $libro->img=$ruta;
                $libro->categoria_id=$request->categorias_id;
                $libro->descripcion=$request->descripcion;
                $libro->save();
                return redirect('libro')->with('libro','libro editado correctamente');
            }elseif ($request->hasFile('archivo')) {
                $borrar=Libro::findOrFail($id);
                Storage::disk('local')->delete('app',$borrar->archivo);
                $rutaA=$request->file('archivo')->store('libros');
                $libro = Libro::findOrFail($id);
                $libro->titulo=$request->titulo;
                $libro->categoria_id=$request->categorias_id;
                $libro->archivo=$rutaA;
                $libro->descripcion=$request->descripcion;
                $libro->save();
                return redirect('libro')->with('libro','libro editado correctamente');
            }else{
                $libro = Libro::findOrFail($id);
                $libro->titulo=$request->titulo;
        
                $libro->categoria_id=$request->categorias_id;
       
                $libro->descripcion=$request->descripcion;
                $libro->save();
                return redirect('libro')->with('libro','libro editado correctamente');
            }

            
        

    }


    public function destroy( $id)
    {
        $libro = libro::findOrFail($id);
        Storage::disk('local')->delete('app',$libro->img); 
        Storage::disk('local')->delete('app',$libro->archivo);
        $libro->delete();
        return redirect('libro')->with('libro','libro eliminado correctamente');;
    }
}
