@extends('plantilla.panel')

@section('container')
<h4>Estos son los datos que aparecen en la pagina de contactos</h4>
<div class="col-md-6">
  <form  action="{{route('contacto.store')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
          <label for="username">Img Presentacion</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <img class="card-img-top" src="../storage/app/{{$data->img}}">
            
            </div>
            <input  type="file" class="form-control"  name="img" value=""  >
       
          </div>
        </div>
        <div class="mb-3">
          <label for="username">Primer Texto</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-keyboard"></i></i></span>
            </div>
            <input type="text" class="form-control"  name="txt1" value="{{$data->txt1}}" placeholder="facebook" >
            
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Segundo Texto</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-keyboard"></i></i></span>
            </div>
            <input type="text" class="form-control"  name="txt2" value="{{$data->txt2}}" placeholder="facebook" >
            
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Facebook</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fab fa-facebook-square"></i></i></span>
            </div>
            <input type="text" class="form-control"  name="fb" value="{{$data->fb}}" placeholder="facebook" >
            
          </div>
        </div>

            <div class="mb-3">
          <label for="username">Instagram</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fab fa-instagram"></i></span>
            </div>
            <input type="text" class="form-control" name="in" value="{{$data->in}}"   >
            
          </div>
        </div>

            <div class="mb-3">
          <label for="username">Youtube</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fab fa-youtube"></i></span>
            </div>
            <input type="text" class="form-control" name="yt" value="{{$data->yt}}"  >
            
          </div>
        </div>

        <button class="btn btn-primary " type="submit">Actualizar</button>
      </form>
</div>


@endsection
