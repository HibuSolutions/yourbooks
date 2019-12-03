@extends('plantilla.plantilla')
@section('categorias')
@endsection
@section('tiempo')
@endsection

@section('container')
<div class="row mt-3 ">
<div class="col-lg-9 ">
	   
   <embed src="../../storage/app/{{$libro->archivo}}" type="application/pdf" width="100%" height="600px" />
</div>
<div class="col-sm-3 ">


	


				<a class="btn btn-sm btn-success " href="../../storage/app/{{$libro->archivo}}">Descargar</a>
  				<a class="btn btn-sm btn-danger " href="{{url('/')}}">Regresar</a>

	
  	
</div>
 
</div>


   




@endsection