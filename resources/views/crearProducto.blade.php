
@extends('layouts.app')

@section('content')
	

	<form action="{{ url('/registrar-producto') }}" method="post">
		 {{ csrf_field() }}
	  <div class="row">
	    <div class="col-4 offset-4">
	    	<h1 class="display-4 text-center">Crear Producto</h1>
	      <input type="text" class="form-control crear" placeholder="Ingrese el nombre.." name="nombre" required="">
	      <input type="text" class="form-control crear" placeholder="Ingrese la descripcion.." name="descripcion" required="">
	      <input type="number" class="form-control crear" placeholder="Ingrese el precio.." name="precio" required="">
	      <select class="custom-select crear" id="inputGroupSelect01" required name="categoriaId">
	      	  <option value="">Seleccione Categoría...</option>
			 @foreach($categorias as $cate)
			   <option value="{{$cate->id}}" required> {{ $cate->descripcion}} </option>
			 @endforeach
		  </select>

		  
	      <div align="center"> 
	      
	      	<button class="btn btn-success crear">Registrar</button>
	

	      </div>
	      
	    </div>
	  </div>
	</form>


@endsection



