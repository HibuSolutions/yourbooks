@extends('plantilla.login')


@section('container')
	<div class="jumbotron">
  <h1 class="display-4">Bienvenido {{ Auth::user()->name }} <img width="50" src="img/confirmado.png"> </h1>
  <p class="lead">Gracias por formar parte de esta comunidad</p>
  <hr class="my-4">
  <p>Aqui podras encontrar el libro que decees recuerda compartir con tus amigos para que esta comunidad siga creciendo de personas geniales como tu.</p>
  <a class="btn btn-primary btn-lg" href="{{url('/')}}" role="button">Regresar</a>
</div>
@endsection


@section('footer')
@endsection