@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 @guest
                 <div class="card-header">Bienvenid@ Invitado }}</div>
                 @else
                <div class="card-header">Bienvenid@ {{ ucwords(Auth::user()->name) }}</div>
                   @endguest
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="alert alert-primary" role="alert">
                Has iniciado sesión!
                </div>

                <div align="center">
            

        <a class="btn btn-primary" href="/">Ir al Inicio</a>

        </div>

                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
