@extends('plantilla.panel')

@section('container')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
   
          <div class="card-header">
            Nueva categoria
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
            <form action="{{route('categoria.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label class="" for="name ">nombre</label>
                <input type="text" name="nombre" required class="form-control">
              </div>
        
                <div class="form-group">
                <label for="name">Imagen</label>
                <input type="file" name="file"  class="form-control" required="" accept="image/*" >
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
