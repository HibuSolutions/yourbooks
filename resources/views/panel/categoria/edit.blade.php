@extends('plantilla.panel')

@section('container')
 <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Nuevo Libro
            @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li> 
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('mensaje'))
        <div class="alert alert-success">
            <p>{{ session('mensaje') }}</p>
        </div>
    @endif
          </div>
          <div class="card-body">
            <form action="{{route('categoria.update',$categoria->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="nombre" value="{{$categoria->nombre}}" required class="form-control">
              </div>
    

      
              <div class="" style="background-image: url(../../img/login/textura.jpg); ">
                <img class="img-fluid rounded mx-auto d-block " src="../../../storage/app/{{$categoria->img}}" style="height: 350px;
                  width:300px;">
              </div>
                

                <div class="form-group">
                  <label for="name">Imagen</label>
                  
                
                <input type="file" name="file"  class="form-control">

                </div>
            
  
              <div class="justify-content-end">
                <input type="submit" value="Enviar" class="btn btn-success">
                <a class="btn btn-danger" href="">Regresar</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
