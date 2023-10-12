@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
<div class="row justify-content-center align-items-center mt-5">
    <div class="col-12 mt-2 mb-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h3>Toma de Horas</h3>
            </div>
            <div class="card-body text-center ">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Mascota</th>
                           
                        <!-- Vista Administrador -->
                        @if(Auth::user()->id_perfil == 1)
                        <th scope="col">Nombre Dueño</th>
                        <th scope="col">Telefono de Contacto</th>   
                        @endif
                        <th scope="col">TIpo Servicio</th>
                        
                        <th scope="col">Estado</th>
                        <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($horas as $index => $hora)
                            <tr>
                            <th scope="row">{{$index+1}}</th>
                            <td>{{ \Carbon\Carbon::parse($hora->fecha_servicio)->format('d/m/Y') }}</td>
                            
                            @foreach($mascotas as $mascota)
                                @if($mascota->id_mascota == $hora->id_mascota)
                                    <td>{{$mascota->nombre_mascota}}</td>
                                @endif
                                @if(Auth::user()->id_perfil == 1)
                                    @foreach($usuarios as $usuario)
                                        @if($usuario->rut == $mascota->rut && $usuario->rut == $hora->rut)
                                            <td>{{$usuario->nombre}}</td>
                                            <td>{{$usuario->fono}}</td>
                                        @endif
                                    @endforeach
                                @endif
                                
                            @endforeach
                            
                            @foreach($servicios as $servicio)
                                @if($servicio->id_atencion == $hora->tipo_servicio)
                                    <td>{{$servicio->nombre_atencion}}</td>
                                @endif
                            @endforeach
                            <!-- Vista Administrador -->
                            
                                <td>{{$hora->estado}}</td>
                                <td>

                                    <!-- a -->
                                    <button type="button" class="btn btn-danger text-white ms-1 px-3" data-bs-toggle="modal" data-bs-target="#eliminarModal.{{$hora->id_hora}}">
                                    Eliminar
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="eliminarModal.{{$hora->id_hora}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>¿Desea Cancelar la Hora de Atencion?</h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Cancelar</button>
                                                    <a href="{{route('horas_esteticas.update',$hora->id_hora)}}" class="btn btn-danger text-white">Aceptar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </td>
                                <!-- fin a -->
                            
                            </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection