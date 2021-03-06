<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="hibu">
  <meta name="author" content="hibu">

  <title>YourBooks</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">
  <link href="{{asset('panel/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body class="@yield('body-class')">
@section('tiempo')
<script type="text/javascript">
  function refrescar(tiempo){
    //Cuando pase el tiempo elegido la página se refrescará 
    setTimeout("location.reload(true);", tiempo);
  }
  //Podemos ejecutar la función de este modo
  //La página se actualizará dentro de 10 segundos
  refrescar(10000);
</script>

@show
  <!-- Navigation --> 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}"><img width="30" src="{{asset('img/icono.png')}}">YourBooks</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}"><i class="fas fa-home"></i> Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('librosGeneral')}}"><i class="fas fa-book"></i> Libros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('contactos')}}"><i class="fas fa-envelope-open-text"></i> Contacto</a>
          </li>
    
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Acceder</a>
  
          </li>
              <li class="nav-item">
          
            <a class="nav-link " href="{{route('register')}}">Registrate</a>
          </li>
          @else
          @can('general')
          <li class="nav-item">
            <a class="nav-link" href="{{url('panelAdmin')}}"><i class="fas fa-laptop-code"></i> Panel Administrativo</a>
          </li>
          @endcan
           <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><img src="{{asset('img/online.png')}}" width="10"> <i class="fa fa-user-o" aria-hidden="true"></i>

                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"><i class="fa fa-share" aria-hidden="true"></i>
            {{ __('Cerrar Sesion') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
      @endguest
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    @section('categorias')
    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Categorias</h1>


        <div id="list-example" class="list-group">
         @foreach($categorias as $categorias)
          <a class="list-group-item list-group-item-action" href="{{url('vercategoria',$categorias->id)}}"><img class="categorias" src="{{asset('../storage/app/')}}/{{$categorias->img}}">  {{$categorias->nombre}}</a>
          @endforeach
        </div>

      </div>
      @show
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

     @yield('container')

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


  <!-- Footer -->


  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('js/codigos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
