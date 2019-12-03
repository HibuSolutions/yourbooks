@extends('plantilla.panel')

@section('container')
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Registro de libros
            <a class="btn btn-primary" href="{{route('libro.create')}}"><i class="fas fa-plus-square"></i> Agregar</a>

          </div>
    @if(session('libro'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Operacion Exitosa!</strong>  {{ session('libro') }} 
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
                    <th>Archivo</th>
					         <th>Categoria</th>
                    <th>Fecha Agregado</th>
                    <th>Ultima Actulizacion</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
               
                <tbody>
                   @foreach($libros as $libro)
                  <tr>
                  	<td style="max-width: 100px;">{{$libro->titulo}}</td>
                  	<td><img class="img-thumbnail"  src="../storage/app/{{$libro->img}}" style="height: 150px;
                      width: 150px;"></td>
                    <td><a class="btn btn-success" href="../storage/app/{{$libro->archivo}}">descargar</a></td>  
                    <td>{{$libro->nombre}}</td>
                    <td>{{$libro->created_at}}</td>
                    <td>{{$libro->updated_at}}</td>
                   
                    <td>
                        

                        <form action="{{ route('libro.destroy', $libro->id) }}" method="post" style="display:inline-block;">
                        @csrf()
                        @method('DELETE')
                        <a class="btn btn-primary" href="{{route('libro.edit',$libro->id)}}"><i class="fas fa-edit"></i></a>
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
