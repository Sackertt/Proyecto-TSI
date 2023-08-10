@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
    <div class="card m-4" >
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{asset('storage/Imagenes mp/Cama1.png')}}" class="img-fluid flex-fill rounded-start imagen-detalle">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Nombre Producto</h5>
                    <p class="card-text">Precio</p>
                    <p class="card-text"><small class="text-body-secondary">Detalles Producto</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection