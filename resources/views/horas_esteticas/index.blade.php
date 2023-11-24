@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid mb-5">
<div class="row justify-content-center align-items-center mt-5">
    <div class="col-12 mt-2 mb-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h3>Toma de Horas</h3>
            </div>
            <div class="card-body text-center ">
                <form action="{{route('horas_esteticas.index')}}">
                    <div class="row mb-2">
                    
                        <div class="col-6">
                            <label for="fecha">Fecha Servicio</label>
                            <input type="date" class="form-control" id="fecha" name="fecha">
                        </div>    
                        <div class="col-6">
                           <button type="submit" class="btn btn-primary mt-4 px-4">Filtrar Horas</button>
                        </div>    
                    </div>
                   
                </form>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
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
                            <td>{{$hora->hora_servicio}}</td>
                            
                            @foreach($mascotas as $mascota)
                                @if($mascota->id_mascota == $hora->id_mascota)
                                    <td>{{$mascota->nombre_mascota}}</td>
                                    @if(Auth::user()->id_perfil == 1)
                                    @foreach($usuarios as $usuario)
                                        @if($usuario->rut == $mascota->rut && $usuario->rut == $hora->rut)
                                            <td>{{$usuario->nombre}}</td>
                                            <td>{{$usuario->fono}}</td>
                                            @break
                                        @endif
                                    @endforeach
                                     @endif
                                @endif
                                
                                
                            @endforeach
                            
                            @foreach($servicios as $servicio)
                                @if($servicio->id_atencion == $hora->tipo_servicio)
                                    <td>{{$servicio->nombre_atencion}}</td>
                                @endif
                            @endforeach
                            <!-- FIN Vista Administrador -->
                            
                                <td>{{$hora->estado}}</td>
                                <td>
                                @if(Gate::allows('soy_usuario'))
                                <!-- usuario -->
                                    <button type="button" class="btn btn-danger text-white ms-1 px-3" data-bs-toggle="modal" data-bs-target="#eliminarModal.{{$hora->id_hora}}">
                                    Cancelar
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade " id="eliminarModal.{{$hora->id_hora}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea Cancelar la Hora de Atencion?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Cancelar</button>
                                                    <a href="{{route('horas_esteticas.update',$hora->id_hora)}}" class="btn btn-danger text-white">Aceptar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                  
                                @if(Gate::allows('soy_admin'))   
                                    <!-- usuario -->
                                    <button type="button" class="btn btn-danger text-white ms-1 px-3" data-bs-toggle="modal" data-bs-target="#eliminarModal.{{$hora->id_hora}}">
                                    Cambiar Estado
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade " id="eliminarModal.{{$hora->id_hora}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary text-white">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Seleccione el estado para la hora</h1>
                                                <button type="button" class="btn-close bg-secondary" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    
                                                </div>
                                                <form action="{{route('horas_esteticas.update',$hora->id_hora)}}">
                                                <div class="modal-body">
                                                        
                                                        <div class="row">
                                                            <div class="col-3"></div>
                                                            <dic class="col-6">
                                                            
                                                            <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="estado" id="flexRadioDefault1" value="Confirmada">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Confirmada
                                                            </label>
                                                            </div>
                                                            <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="estado" id="flexRadioDefault1" value="Completado">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Completada
                                                            </label>
                                                            </div>
                                                            <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="estado" id="flexRadioDefault1" value="Cancelada">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Cancelada
                                                            </label>
                                                            </div>
                                                            <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="estado" id="flexRadioDefault1" value="No Completada">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                No Completada
                                                            </label>
                                                            </div>
                                                           
                                                        
                                                        </div>
                                                       
                                                </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-primary">Confirmar</button>
                                                    </form>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </td>
                                <!-- fin usuario -->
                                
                                <!-- administrador -->








                                <!-- fin administrador -->
                            </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
            @if(count($horas) == 0)
                <div class="card-footer text-center bg-danger text-white ">
                    <h1>No hay Horas Registradas</h1>
                </div>
            @endif
        </div>
    </div>
</div>



@endsection