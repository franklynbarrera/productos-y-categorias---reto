
@extends('layouts.app')

@section('content')
    <div class="container">
        
        <div class="row">
            
            <div class="col-8 offset-2 text-center " style="margin-top: 60px;border: 10px outset #00BCD4">
                <i class="far fa-handshake" style="font-size: 80px; color:#00BCD4"></i>  

                 @guest
                 <h1 class="display-4">Bienvenid@ Invitado</h1> 
                @else
            	<h1 class="display-4">Bienvenid@ {{ ucwords(Auth::user()->name) }}</h1>   
            	@endguest
                <p>Esto es un reto, para hacer uso de la pagina favor ir a la barra superior y allí estan las opciones posibles</p>
                <h5 style="margin-top: 10px; color:red"><strong>Ayuda</strong></h5>
                <li style="text-align:justify;">El apartado de "Administracion" allí se puede ver tanto <strong>Listado de Categorías</strong>(En dicho listado cada categoría tiene su link el cual lleva a los productos que poseen esa categoría clickeada en especifico),<strong>Listado de Productos</strong> y <strong>Productos Agrupados por Categorías</strong></li> 

                <li style="text-align:justify;">El apartado de "Crear" allí se puede crear tanto <strong>Categorías</strong> como <strong>Productos</strong>(Al crear un producto se muestra un listado de todas las Categorias existentes "Catalogo" el cual al probar podrán notar que si se crear Categorías nuevas esto se actualiza ya que viene directamente de la BD</li>

                  <h5 style="margin-top: 10px; color:blue"><strong>¡Muchas Gracias!</strong></h5>
            </div>

        </div>


    </div>
@endsection
