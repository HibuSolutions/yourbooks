@extends('plantilla.panel')

@section('container')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Nuevo usuario
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
            <form action="{{route('usuario.store') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" required class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" required class="form-control">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" required class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Rol</label>
                <select class="form-control" name="rol">
                  @foreach ($roles as $key => $value)
                    <option value="{{ $value }}">{{ $value }}</option>

                  @endforeach
                       
                </select>
              </div>
              <div class="justify-content-end">
                <input type="submit" value="Enviar" class="btn btn-success">
                <a class="btn btn-danger" href="{{url('/dashUsuarios')}}">Regresar</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
