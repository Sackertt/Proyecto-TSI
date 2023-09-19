@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 mt-5">
            <div class="card ">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Actualizar Mascota</h3>
                </div>
                <div class="card-body  ">
                    
                <form method="POST" action="{{route('mascotas.update',$mascota->id_mascota)}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="{{$mascota->nombre_mascota}}" readonly>
                    </div>

                    <label for="nombre" class="form-label">Tamaño</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tamaño" id="flexRadioDefault1" value="Pequeño" @if($mascota->tamaño_mascota == "Pequeño") checked @endif>
                        <label class="form-check-label" for="flexRadioDefault1">Pequeño</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tamaño" id="flexRadioDefault1" value="Mediano" @if($mascota->tamaño_mascota == "Mediano") checked @endif>
                        <label class="form-check-label" for="flexRadioDefault1">Mediano</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tamaño" id="flexRadioDefault1" value="Grande" @if($mascota->tamaño_mascota == "Grande") checked @endif>
                        <label class="form-check-label" for="flexRadioDefault1">Grande</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tamaño" id="flexRadioDefault1" value="Muy Grande" @if($mascota->tamaño_mascota == "Muy Grande") checked @endif>
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