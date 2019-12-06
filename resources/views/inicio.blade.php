@extends('plantilla.plantilla')

@section('container')
<center >
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <img class="" width="70" src="{{asset('img/icono.png')}}">
    <h1 class="display-4">{{$intro->txt1}}</h1>
    <p class="lead">{{$intro->txt2}}</p>
  </div>
</div>
</center>

        <div class="row mt-3">
          @foreach($libro as $libros)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top libroC" src="../storage/app/{{$libros->img}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h6>{{$libros->titulo}}</h6>
                 
                </h4>
               <a class="btn btn-info" href="{{url('verlibro',$libros->id)}}"><i class="fab fa-readme"></i></a>
               <a class="btn btn-success" href=""><i class="fas fa-file-download"></i></a>
              </div>
              <div class="card-footer">
                <small class="text-muted">publicado el {{ date('d-M-y', strtotime($libros->created_at)) }}</small>


              </div>
            </div>
          </div>
          @endforeach
        
        </div>
        <!-- /.row -->
@endsection
