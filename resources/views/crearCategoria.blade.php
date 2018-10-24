@extends('layouts.app')

@section('content')
	

	<form action="{{ url('/registrar-categoria') }}" method="post">
		 {{ csrf_field() }}
	  <div class="row">
	    <div class="col-4 offset-4">
	    	<h1 class="display-4 text-center">Crear Categoria</h1>
	      <input type="text" class="form-control crear" placeholder="Ingrese el nombre.." name="nombre" required="">
	      <div align="center"> 
	      
	      	<button class="btn btn-success crear">Registrar</button>
	

	      </div>
	      
	    </div>
	  </div>
	</form>


@endsection
