
@extends('layouts.app')

@section('content')
	<div class="container">
		
		<div class="row">
			
			<div class="col-8 offset-2 text-center ">
				
			  @if($individual == true)
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Descripcion</th>
				      <th scope="col">Precio</th>
				    </tr>
				  </thead>
				  <tbody>
			
				<h1 class="display-4">Categoría {{$categoria_nombre}}</h1>
				  @foreach($datos as $value)
				    <tr>
				      <th scope="row">{{$value->id}}</th>
				      <td>{{$value->nombre}}</td>		
				      <td>{{$value->descripcion}}</td>		
				      <td>{{$value->precio}}</td>		
				    </tr>
				  @endforeach

				  @if(count($datos)== 0)

						<tr>
							<th scope="row">No tiene productos</th>	
						</tr>

					 @endif
				   
				  </tbody>
				</table>

			  @else
		
				@foreach($data as $value)
				  
				  <table class="table">
				  	<thead class="thead-dark">	
				  	  <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Descripcion</th>
				      <th scope="col">Precio</th>
				    </tr>	
				    </thead>		  		
				  		<tbody>
				  			<h1 class="display-4 tabla">Categoría {{$value->categoria_nombre}}</h1>

				  			 @foreach($value->productos as $producto)

							    <tr>
							      <th scope="row">{{$producto->id}}</th>
							      <td>{{$producto->nombre}}</td>		
							      <td>{{$producto->descripcion}}</td>		
							      <td>{{$producto->precio}}</td>		
							    </tr>
							  @endforeach

							    @if(count($value->productos)== 0)

							        <tr>
								      <th scope="row">No tiene productos</th>	
							    	</tr>

							    @endif
				  		</tbody>

				  @endforeach


				@endif

			</div>

		</div>


	</div>
@endsection
