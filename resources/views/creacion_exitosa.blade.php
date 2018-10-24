
@extends('layouts.app')

@section('content')
  
  <div class="row" style="margin-top:10%;">
  	
  		<div class="col-6 offset-3 ">
  			
  			<div class="alert alert-primary" role="alert">
		 		@if($nombre=='Categoría')

		 		{{$nombre}} Creada Exitosamente

		 		@else

		 			{{$nombre}} Creado Exitosamente
		 		@endif

  		</div>

  		<div align="center">
  			

  		<a class="btn btn-primary" href="/">Ir al Inicio</a>

  		</div>
  </div>
	
</div>
@endsection
