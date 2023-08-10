@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
    <div class="row">
        <!-- Filtro -->
        <form action="{{route('productos.index')}}">
            <select class="form-select" name="tipo" aria-label="Default select example">
            <option selected>Seleccione Filtro de Productos</option>
            @foreach($tipos as $tipo)
            <option value="{{$tipo->id_tipo}}">{{$tipo->nombre_tipo}}</option>
            @endforeach
            </select>
            <button class="btn btn-primary mt-1 px-3" type="submit">Filtrar</button>
        </form>
        
        <!-- Productos -->
        @foreach($productos as $producto)
        <div class="col-4">
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