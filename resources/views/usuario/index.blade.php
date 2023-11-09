@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
    <div class="row">
        <di class="col-4">
            <div class="card text-center ">
                <div class="card-header bg-primary text-white">
                    <h3>Datos Personales</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5>Nombre:</h5>
                            <h5>Rut:</h5>
                            <h5>Direccion:</h5>
                            <h5>Telefono:</h5>
                        </div>
                        <div class="col text-start">
                            <h5>{{$usuario->nombre}}</h5>
                            <h5>{{$usuario->rut}}</h5>
                            <h5>{{$usuario->direccion}}</h5>
                            <h5>{{$usuario->fono}}</h5>
                        </div>
                    </div>
                </div>
                <!-- <div class="card-footer">

                </div> -->
            </div>
        </di>
        <di class="col-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Mascotas</h3>
                </div>
                <div class="card-body text-center">
                    <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tamaño</th>
                        <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mascotas as $index => $mascota)
                            <tr>
                            <th scope="row">{{$index+1}}</th>
                            <td>{{$mascota->nombre_mascota}}</td>
                            <td>{{$mascota->tamaño_mascota}}</td>
                            <td>
                                <!-- Editar Mascota -->
                                <a href="{{route('mascotas.edit', $mascota->id_mascota)}}" class="btn btn-success text-white">Editar</a>
                                <!-- Fin Editar Mascota -->
                                <!-- Eliminar Mascota -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#exampleModal.{{$index}}">
                                Eliminar Mascota
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal.{{$index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea Eliminar a {{$mascota->nombre_mascota}}?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a href="{{route('mascotas.delete',$mascota->id_mascota)}}" class="btn btn-danger text-white">Eliminar</a> 

                                    </div>
                                    </div>
                                </div>
                                </div>

                                <!-- Fin ELiminar Mascota -->
                            </td>
                            </tr>
                       @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="card-footer text-end">
                    <h6>Añade aqui una nueva mascota a tu cuenta</h6>
                    <a href="{{route('mascotas.create')}}" class="btn btn-primary">Añadir</a>
                </div>
            </div>
        </di>
    </div>
</div>
@endsection