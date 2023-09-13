@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Registrar Mascota</h3>
                </div>
                <div class="card-body ">
                <form action="">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="">
                </div>
                <label for="nombre" class="form-label">Tamaño</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="flexRadioDefault1" value="0">
                    <label class="form-check-label" for="flexRadioDefault1">S</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="flexRadioDefault1" value="0">
                    <label class="form-check-label" for="flexRadioDefault1">M</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="flexRadioDefault1" value="0">
                    <label class="form-check-label" for="flexRadioDefault1">L</label>
                </div>
                <div class="text-end">
                    <button class="btn btn-primary " type="">Registrar</button>
                </div>
                
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection