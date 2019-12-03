@extends('plantilla.panel')

@section('container')

<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Registro de categorias
            <a class="btn btn-primary" href="{{route('categoria.create')}}"><i class="fas fa-plus-square"></i> Agregar</a>

          </div>
    @if(session('categoria'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Operacion Exitosa!</strong>  {{ session('categoria') }} 
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
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Fecha Agregado</th>
                    <th>Ultima Actulizacion</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
               
                <tbody>
                   @foreach($categorias as $categoria)
                   
                  <tr>
                  	<td style="max-width: 100px;">{{$categoria->nombre}}</td>
                  	<td><img class="categorias"  src="../storage/app/{{$categoria->img}}" ></td>
              
                  
                    <td>{{$categoria->created_at}}</td>
                    <td>{{$categoria->updated_at}}</td>
                   
                    <td>
                        

                        <form action="{{ route('categoria.destroy', $categoria->id) }}" method="post" style="display:inline-block;">
                        @csrf()
                        @method('DELETE')
                        <a class="btn btn-primary" href="{{route('categoria.edit',$categoria->id)}}"><i class="fas fa-edit"></i></a>
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
