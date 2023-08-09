@extends('template.master')
@section('contenidoPrincipal')
<div class="container">
    <div class="row">
        @foreach($productos as $producto)
        <div class="col">
            <div class="card my-4 ms-4">
                <img src="{{asset('storage/Imagenes mp/'.$producto->imagen_producto)}}" class="card-img-top producto-tamaño img-fluid flex-fill" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$producto->nombre_producto}}</h5>
                <h6>$.{{$producto->precio_producto}}</h6>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection