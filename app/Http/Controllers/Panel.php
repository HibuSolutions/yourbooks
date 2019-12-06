<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use App\User;
use App\Libro;
use App\Categoria;
use App\Intro;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class Panel extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $usuarios=User::count();    
    $libros=Libro::count();  
    $categorias=Categoria::count();  
    $contacto=contacto::findOrFail(1);
    return view('panel.index',compact('contacto','usuarios','libros','categorias'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $intro=Intro::findOrFail(1);
        $intro->txt1=$request->txt1;
        $intro->txt2=$request->txt2;
        $intro->save();
        return redirect('intro');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function intro()
    {   
        $intro=Intro::findOrFail(1);
        return view('panel.intro.intro',compact('intro'));
    }
}
