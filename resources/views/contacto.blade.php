@extends('plantilla.plantilla')
@section('body-class','loginFondo')
@section('categorias')
@endsection
@section('container')
<div class="jumbotron mt-3">
  <h1 class="display-4">{{$contactos->txt1}}</h1>
  <p class="lead">{{$contactos->txt2}}</p>
  <img class="card-img-top" src="{{$contactos->img}}">
  <hr class="my-4">
  <p>{{$contactos->txt3}}</p>
  <div class="row">

      <a target="_blank" class="btn btn-primary ml-3" href="{{$contactos->fb}}"><i class="fab fa-facebook-square"></i></a>
      <a target="_blank" class="btn btn-warning ml-2" href="{{$contactos->in}}"><i class="fab fa-instagram"></i></a>
      <a target="_blank" class="btn btn-danger ml-2" href="{{$contactos->yt}}"><i class="fab fa-youtube"></i></a>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection