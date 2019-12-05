@extends('plantilla.panel')

@section('container')
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Registro de usuarios
            <a class="btn btn-primary" href="{{route('usuario.create')}}"><i class="fas fa-plus-square"></i> Agregar</a>

          </div>
    @if(session('usuario'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Operacion Exitosa!</strong>  {{ session('usuario') }} 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>

 

</div>
    @endif
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0" >
                <thead class="thead-dark">
                  <tr>
               
                    <th>nombre</th>
                    <th>Rol</th>
                    <th>email</th>
                   <th>paswoord</th>
                    <th>Agregado</th>
                    <th>Actulizacion</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
               
                <tbody>
                   @foreach($usuarios as $usuario)
                   
                  <tr>
              
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->roles->implode('name',',')}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->pass}}</td>
                    <td>{{ date('d-M-y', strtotime($usuario->created_at)) }}</td>
                    <td>{{ date('d-M-y', strtotime($usuario->updated_at)) }}</td>
                   
                    <td>
                        

                        <form action="{{ route('usuario.destroy', $usuario->id) }}" method="post" style="display:inline-block;">
                        @csrf()
                        @method('DELETE')
                        <a class="btn btn-primary" href="{{route('usuario.edit',$usuario->id)}}"><i class="fas fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                
              </table>
            </div>
          </div>
     
        </div>


@endsection
