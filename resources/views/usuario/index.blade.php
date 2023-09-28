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
                                <a href="{{route('mascotas.edit', $mascota->id_mascota)}}" class="btn btn-success text-white">Editar</a>
                                <a href="" class="btn btn-danger text-white">Eliminar</a> 
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