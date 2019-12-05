<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=User::all();
        return view('panel.usuario.usuarios',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $roles=Role::all()->pluck('name','id');
        return view('panel.usuario.create',compact('roles'));
       
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
        'name'=>'required|max:15',
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:4'],

        ],

        [
            'name.max' => 'Máximo 15 caracteres para el nombre',
            'email.unique'=>'este email ya esta en uso',

        ]);



        $usuario = new User;
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->pass = $request->password;
        if ($usuario->save()) {
          // asignar el rol
          $usuario->assignRole($request->rol);

        return redirect('usuario')->with('usuario','usuario agregado exitosamente');
    }
    
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
        
        $usuario = User::findOrFail($id);
        $roles = Role::all()->pluck('name', 'id');
        return view('panel.usuario.edit', compact('usuario', 'roles'));
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
          $this->validate($request,[
        'name'=>'required|max:15',
        'email' => ['required', 'string', 'email', 'max:255'],
        'password' => ['required', 'string', 'min:4'],

        ],

        [
            'name.max' => 'Máximo 15 caracteres para el nombre',
            

        ]);


        $usuario = User::findOrFail($id);
        
        if($request->password != null){
            $usuario->password = bcrypt($request->password);
            $usuario->pass = $request->password;
            $usuario->name = $request->name;
            $usuario->email = $request->email;
            $usuario->syncRoles([$request->rol]);
            $usuario->save();
            return redirect('usuario')->with('usuario','usuario editado exitosamente');
        }

            return redirect('usuario')->with('usuario','algo salio mal por favor revisa');


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);

        if ($usuario->delete()) {
            

            return redirect('usuario')->with('usuario','usuario eliminado correctamente');
        }



    }
}
