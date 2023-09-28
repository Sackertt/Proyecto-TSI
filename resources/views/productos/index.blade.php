@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
    <div class="row">
        <!-- Filtro -->
        <div class="col-1"></div>
        <div class="col-5 text-center">
            <form action="{{route('productos.index')}}">
                <input class="form-control" list="datalistOptions" id="exampleDataList" name="busqueda" placeholder="Buscador">
                <datalist id="datalistOptions">
                    @foreach($productos as $producto)
                    <option value='{{$producto->nombre_producto}}' >
                    @endforeach
                </datalist>
                <button class="btn btn-primary mt-1 px-3" type="submit">Buscar</button>
            </form>
        </div>
        <div class="col-5 text-center">
            <form action="{{route('productos.index')}}">
                <select class="form-select" name="tipo" aria-label="Default select example">
                <option value="XD">Seleccione Filtro de Productos</option>
                @foreach($tipos as $tipo)
                <option value="{{$tipo->id_tipo}}">{{$tipo->nombre_tipo}}</option>
                @endforeach
                </select>
                <button class="btn btn-primary mt-1 px-3 me-4" type="submit">Aplicar Filtro</button>
                <a href="{{route('productos.index')}}" class="btn btn-danger text-white">Borrar Filtros</a>
            </form>
        </div> 
        <div class="col-1"></div>
        <!-- Fin Filtro -->
        <!-- <div class="col-12 col-md-4">
            <div class="card my-4 mx-3">
                <img src="{{asset('images/Logo-MP.png')}}" class="card-img-top producto-tamaño img-fluid flex-fill" alt="...">
                <div class="card-body">
                <h5 class="card-title">nombre_producto</h5>
                <h6>$.precio_producto</h6>
                <a href="{{route('productos.index')}}" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div> -->
        <!-- Productos -->
        @foreach($productos as $producto)
        <div class="col-12 col-md-4">
            <div class="card my-4 mx-3">
                <img src="{{asset('storage/Imagenes mp/'.$producto->imagen_producto)}}" class="card-img-top producto-tamaño img-fluid flex-fill" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$producto->nombre_producto}}</h5>
                <h6>$.{{$producto->precio_producto}}</h6>
                <a href="{{route('detalles_productos.index',$producto->id_producto)}}" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection