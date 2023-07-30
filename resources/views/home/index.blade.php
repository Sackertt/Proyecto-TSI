@extends('template.master')

@section('contenidoPrincipal')
<!-- PUBLICIDAD XD -->
<div class="container">
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{asset('images/carusel/FUTURISTA.jpg')}}" class="d-block d-flex img-fluid flex-fill imagen-banner" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{asset('images/carusel/SPITERMAN.jpg')}}" class="d-block d-flex img-fluid flex-fill imagen-banner" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{asset('images/carusel/KOKUN.jpg')}}" class="d-block d-flex img-fluid flex-fill imagen-banner" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>
<div class="container"></div>
@endsection