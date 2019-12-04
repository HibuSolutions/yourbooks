<?php

namespace App\Http\Controllers;

use App\Contacto;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;


class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos=Contacto::findOrFail(1);
        $categorias=Categoria::all()->where('estado','0'); 
       return view('contacto',compact('contactos','categorias'));
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


    public function store(Request $request)
    {
        
       if($request->hasFile('img')){
        $edit=Contacto::findOrFail(1);
        Storage::disk('local')->delete('app',$edit->img);
        $ruta=$request->file('img')->store('contacto');
       
        $edit->txt1=$request->txt1;
        $edit->txt2=$request->txt2;
        $edit->in=$request->in;
        $edit->yt=$request->yt;
        $edit->fb=$request->fb;
        $edit->img=$ruta;
        $edit->save();
        return redirect('contactosPanel');

       }else{
        $contacto=Contacto::findOrFail(1);
        $contacto->txt1=$request->txt1;
        $contacto->txt2=$request->txt2;
        $contacto->in=$request->in;
        $contacto->yt=$request->yt;
        $contacto->fb=$request->fb;
        $contacto->save();
        return redirect('contactosPanel');
       }





        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        //
    }

    public function panelC(){
        $data=Contacto::findOrFail(1);
        return view('panel.contactos.contactos',compact('data'));
    }
}
