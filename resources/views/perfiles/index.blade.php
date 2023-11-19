@php
$perfil = [1 => 'Administrador', 2 => 'Usuario']
@endphp
@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
<div class="row">
    <div class="col mx-4">
        <div class="card text-center">
            <div class="card-header bg-primary text-white">
                <h2>Gestion de Usuarios</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered border-secondary">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Rut</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Tipo Perfil</th>
                    <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $index  => $usuario)
                    <tr>
                    <th scope="row">{{$index + 1}}</th>
                    <td>{{$usuario->rut}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->fono}}</td>
                    <td>{{$usuario->direccion}}</td>
                    <td>{{$perfil[$usuario->id_perfil]}}</td>
                    <td> 
                        @if($usuario->rut != Auth::user()->rut)
                            @if($usuario->eliminado == true)
                            <h6>Eliminado</h6>
                            @else
                            <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#exampleModal.{{$index}}">
                            Eliminar Usuario
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal.{{$index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Eliminar el Usuario {{$usuario->nombre}}?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Cancelar</button>
                                    <a href="{{route('perfiles.delete',$usuario->rut)}}" class="btn btn-danger text-white">Eliminar</a>
                                </div>
                                </div>
                            </div>
                            </div>
                            
                            @endif
                        @else
                            <h6>Usuario Activo</h6>  
                        @endif
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection