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
            <form action="{{route('libro.update',$libro->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="name">Titulo</label>
                <input type="text" name="titulo" value="{{$libro->titulo}}" required class="form-control">
              </div>
    
                <div class="form-group">
                <label for="descripcion">Descripcion</label>
          


          <div class="md-form">


         <textarea id="form7"  name="descripcion" required=""  class="md-textarea form-control" rows="3">{{$libro->descripcion}}</textarea>


          
          </div>

              </div>
      
              <div class="" style="background-image: url(../../img/login/textura.jpg); ">
                <img class="img-fluid rounded mx-auto d-block " src="../../../storage/app/{{$libro->img}}" style="height: 400px;
                      width:300px;">
              </div>
                

                <div class="form-group">
                  <label for="name">Imagen</label>
                  
                
                <input type="file" name="imagen"  class="form-control">

                </div>
                      <div class="form-group">
                    <label for="name">LIBRO PDF </label>
                    
                  
                  <input type="file" name="archivo"  class="form-control" accept="aplication/pdf">

                  </div>

                 
              <div class="form-group">

                <label for="categoria">Categoria</label>
                <select class="form-control" name="categorias_id">
                 

                  @foreach ($categorias as $key)
                    <option value="{{ $key->id }}">{{ $key->nombre }}</option>
                  @endforeach
                </select>
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
