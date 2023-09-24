@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
<div class="row justify-content-center align-items-center mt-5">
    <div class="col-12 col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h3>Toma de Horas</h3>
            </div>
            <div class="card-body  ">
                    
                <form method="POST" action="{{route('horas_esteticas.store')}}">
                    @csrf
                   <div class="row">
                    <div class="col-6">
                        <label for="mascota">Mascota</label>
                        <select class="form-select" aria-label="Default select example" name="mascota" id="mascota">
                        <option value="">Seleccione Mascota</option>
                        @foreach($mascotas as $mascota)
                        <option value="{{$mascota->id_mascota}}">{{$mascota->nombre_mascota}}</option>
                        @endforeach
                        </select>
                        
                    </div>
                    <div class="col-6">
                    <label for="servicio">Tipo Servicio</label>
                    <select class="form-select" aria-label="Default select example" name="servicio" id="servicio">
                        <option value="">Seleccione Tipo de Servicio</option>
                        @foreach($servicios as $servicio)
                        <option value="{{$servicio->id_atencion}}">{{$servicio->nombre_atencion}}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="col-6 mt-2">
                    <label for="fecha">Tipo Servicio</label>
                    <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                    <div class="col-6 mt-4 text-end">
                    <button class="btn btn-primary mt-2" type="submit">Tomar Hora</button>
                    </div>
                   </div>
                   
                </form>
                    <div class="mt-3">
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
</div>



@endsection