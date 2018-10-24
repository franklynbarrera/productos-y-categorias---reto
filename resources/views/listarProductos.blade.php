
@extends('layouts.app')

@section('content')
	<div class="container">
		
		<div class="row">
			
			<div class="col-8 offset-2 text-center ">
				
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Descripcion</th>
				      <th scope="col">Categoría</th>
				      <th scope="col">Precio</th>
				    </tr>
				  </thead>
				  <tbody>
			
				<h1 class="display-4">Lista de Productos</h1>
				  @foreach($productos as $value)
				    <tr>
				      <th scope="row">{{$value->id_producto}}</th>
				      <td>{{$value->nombre_producto}}</td>		
				      <td>{{$value->descripcion_producto}}</td>		
				      <td>{{$value->categoria}}</td>		
				      <td>{{$value->precio_producto}}</td>		
				    </tr>
				  @endforeach
				   
				  </tbody>
				</table>

			  
			</div>

		</div>


	</div>
@endsection
