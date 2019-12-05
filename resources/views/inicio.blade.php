@extends('plantilla.plantilla')

@section('container')
<center >
<div class="card mt-3" >
  <div class="container">
    <img src="img/photo.jpg" class="card-img-top carrusel image" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
      <div class="middle">
    <a class="btn btn-primary" href="">Ver</a>
  </div>
    <div class="">
      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
    </div>
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
               <a class="btn btn-info" href="{{route('libro.show',$libros->id)}}"><i class="fab fa-readme"></i></a>
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
