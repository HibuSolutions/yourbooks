@extends('plantilla.panel')

@section('container')
<h4>Estos son los datos que aparecen en la pagina de contactos</h4>
<center >
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <img class="" width="70" src="{{asset('img/icono.png')}}">
    <h1 class="display-4">{{$intro->txt1}}</h1>
    <p class="lead">{{$intro->txt2}}</p>
  </div>
</div>
</center>
<div class="col-md-6">
  <form  action="{{route('panelAdmin.store')}}" method="post" enctype="multipart/form-data">
    @csrf

        <div class="mb-3">
          <label for="username">Primer Texto</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-keyboard"></i></i></span>
            </div>
            <input type="text" class="form-control"  name="txt1" value="{{$intro->txt1}}" placeholder="facebook" >
            
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Segundo Texto</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-keyboard"></i></i></span>
            </div>
            <input type="text" class="form-control"  name="txt2" value="{{$intro->txt2}}" placeholder="facebook" >
            
          </div>
        </div>




        <button class="btn btn-primary " type="submit">Actualizar</button>
      </form>
</div>

@endsection
