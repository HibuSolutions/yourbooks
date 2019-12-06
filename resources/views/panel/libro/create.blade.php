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
            <form action="{{route('libro.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label class="" for="name ">Titulo</label>
                <input type="text" name="titulo" required class="form-control">
              </div>
        
                <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea required  name="descripcion" class="form-control" rows="5" cols="20"></textarea>
                  
                
              </div>
    
                <div class="form-group">
                <label for="name">Imagen</label>
                <input type="file" name="file"  class="form-control" required="" accept="image/*" >
                </div>

                <div class="form-group">
                <label for="name">Libro PDF O WORD</label>
                <input type="file" name="archivo"  class="form-control" required="" accept="application/pdf" >

                </div>
               
              <div class="form-group">

                <label for="categoria">Categoria</label>
                <select class="form-control" name="categoria">
                 

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
