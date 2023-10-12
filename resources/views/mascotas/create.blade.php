@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 mt-5">
            <div class="card ">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Registrar Mascota</h3>
                </div>
                <div class="card-body  ">
                    
                <form method="POST" action="{{route('mascotas.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="{{old('nombre')}}">
                    </div>
                    <label for="tipo_mascota">Seleccione Tipo de Animal de su mascota</label>
                    <select class="form-select" id="tipo_mascota" name="tipo_mascota" aria-label="">
                    <option value=""></option>
                    <option value="Perro">Perro</option>
                    <option value="Gato">Gato</option>
                    <option value="Conejo">Conejo</option>
                    </select>
                    <label for="nombre" class="form-label">Tamaño</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tamaño" id="flexRadioDefault1" value="Pequeño">
                        <label class="form-check-label" for="flexRadioDefault1">Pequeño</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tamaño" id="flexRadioDefault1" value="Mediano">
                        <label class="form-check-label" for="flexRadioDefault1">Mediano</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tamaño" id="flexRadioDefault1" value="Grande">
                        <label class="form-check-label" for="flexRadioDefault1">Grande</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tamaño" id="flexRadioDefault1" value="Muy Grande">
                        <label class="form-check-label" for="flexRadioDefault1">Muy Grande</label>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary " type="submit">Registrar</button>
                    </div>

                </form>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <p>Por favor solucione los siguientes problemas:</p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection