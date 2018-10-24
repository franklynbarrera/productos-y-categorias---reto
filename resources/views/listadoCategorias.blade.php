
@extends('layouts.app')

@section('content')
	<div class="container">
		
		<div class="row">
			
			<div class="col-8 offset-2 text-center ">
				

				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Descripcion</th>
				    </tr>
				  </thead>
				  <tbody>

				<h1 class="display-4">Lista de Categorías</h1>

				  @foreach($datos as $value)
				    <tr>
				      <th scope="row">{{$value->id}}</th>
				      <td><a href="{{ url('/categorias-productos/'.$value->id) }}">{{$value->descripcion}}</a></td>
				    </tr>
				  @endforeach

				    
				   
				  </tbody>
				</table>

			</div>

		</div>


	</div>
@endsection
