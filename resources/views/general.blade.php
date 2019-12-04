@extends('plantilla.plantilla')

@section('container')
<h1>Libros de la a - z</h1>
        <div class="row">
          @foreach($libro as $libros)

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top libroC" src="../storage/app/{{$libros->img}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  
                  <h6>{{$libros->titulo}}</h6>
                </h4>
               <a class="btn btn-info" href="{{route('libro.show',$libros->id)}}"><i class="fab fa-readme"></i></a>
               <a class="btn  btn-success " href="../../storage/app/{{$libros->archivo}}"><i class="fas fa-file-download"></i></a>
              </div>
              <div class="card-footer">
                  <small class="text-muted">publicado el {{ date('d-M-y', strtotime($libros->created_at)) }}</small>

              </div>
            </div>
          </div>
          @endforeach
     

        </div>

           {{ $libro->links() }}

              <br>
            <br>
            <br>
        <!-- /.row -->
@endsection