@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
<div class="row justify-content-center align-items-center mt-5">
    <div class="col-12 col-md-8">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h3>Toma de Horas</h3>
            </div>
            <div class="card-body text-center ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Mascota</th>
                        <th scope="col">TIpo Servicio</th>
                        <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($horas as $index => $hora)
                            <tr>
                            <th scope="row">{{$index+1}}</th>
                            <td>{{$hora->fecha_servicio}}</td>
                            
                            @foreach($mascotas as $mascota)
                                @if($mascota->id_mascota == $hora->id_mascota)
                                    <td>{{$mascota->nombre_mascota}}</td>
                                @endif
                            @endforeach
                            
                            @foreach($servicios as $servicio)
                                @if($servicio->id_atencion == $hora->tipo_servicio)
                                    <td>{{$servicio->nombre_atencion}}</td>
                                @endif
                            @endforeach
                            <td>
                                <a href="" class="btn btn-danger text-white">Cancelar</a>
                            </td>
                            </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection