<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use App\Libro;
use Illuminate\Support\Facades\Storage;
use paginate;
use paginator;
use Illuminate\Http\UploadedFile;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categorias=Categoria::all();
        return view('panel.categoria.categorias',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'nombre'=>'required|max:80',                
            'file' => 'required|mimes:jpg,jpeg,png',
        ],

        [
            'nombre.max' => 'Máximo 80 caracteres para el nombre',
            'file.required' => 'por favor sube una imagen',

        ]);

        
       
        $ruta=$request->file('file')->store('categorias');
        $categoria = new Categoria;
        $categoria->nombre = $request->nombre;
        $categoria->img=$ruta;
        $categoria->save();
        return redirect('categoria')->with('categoria','categoria agregada correctamente');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
         $libro= Libro::join('categorias','libros.categoria_id','=','categorias.id')
        ->where('libros.categoria_id','=',$id)
        ->select('libros.titulo','libros.updated_at','libros.img','libros.archivo','libros.created_at','categorias.nombre','libros.id')->paginate(2);
        


        $categorias=Categoria::all()->where('estado','0');
        return view('show',compact('categorias','libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria=Categoria::findOrFail($id);

        return view('panel.categoria.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                 $this->validate($request,[
            'nombre'=>'required|max:80',                
            'file' => 'mimes:jpg,jpeg,png',
        ],

        [
            'nombre.max' => 'Máximo 80 caracteres para el nombre',
            'file.mimes' => 'por favor sube una imagen',

        ]);

           $categoria=request()->except(['_token','_method']);


            
            ////con esta madre remplaza la imagen si viene una en el form si sale del if

            if($request->hasFile('file')){
            $borrar=Categoria::findOrFail($id);         
            Storage::disk('local')->delete('app',$borrar->img);   
            $ruta=$request->file('file')->store('categorias');
            $categoria = Categoria::findOrFail($id);
            $categoria->nombre=$request->nombre;
            $categoria->img=$ruta;           
            $categoria->save();       
            return redirect('categoria');
            }else{

            $categoria = Categoria::findOrFail($id);
            $ruta=$categoria->img;
            $categoria->nombre=$request->nombre;
            $categoria->img=$ruta;
            $categoria->save();
            return redirect('categoria')->with('categoria','categoria editada correctamente');

            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $categoria = Categoria::findOrFail($id);
        $estado=$categoria->estado;
        if($estado === 0){
            $categoria->estado=(1);
            $categoria->save();
            return redirect('categoria')->with('categoria','categoria desactivada correctamente');
        }else{
            $categoria->estado=(0);
            $categoria->save();
            return redirect('categoria')->with('categoria','categoria activada correctamente');

        }
    }


}
