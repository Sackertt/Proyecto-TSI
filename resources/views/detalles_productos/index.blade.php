@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
    <div class="card m-4" >
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{asset('public/images/LOGO-MP.png')}}" class="img-fluid flex-fill rounded-start imagen-detalle">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">{{$producto->nombre_producto}}</h5>
                    <p class="card-text">{{$producto->precio_producto}}</p>
                    <p class="card-text"><small class="text-body-secondary">{{$producto->descrip_producto}}</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-end me-4 ">
            <a href="{{route('productos.index')}}" class="btn btn-primary px-4">Volver</a>
        </div>
    </div>
</div>
@endsection