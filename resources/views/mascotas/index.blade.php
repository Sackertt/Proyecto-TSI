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
                    <h5>Nombre</h5>
                    <h5>Rut</h5>
                    <h5>Direccion</h5>
                    <h5>Telefono</h5>
                </div>
            </div>
        </di>
        <di class="col-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Mascotas</h3>
                </div>
                <div class="card-body text-center">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tamaño</th>
                        <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <a href="" class="btn btn-success text-white">Editar</a>
                            <a href="" class="btn btn-danger text-white">Eliminar</a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>
                            <a href="" class="btn btn-success text-white">Editar</a>
                            <a href="" class="btn btn-danger text-white">Eliminar</a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>@twitter</td>
                        <td>
                            <a href="" class="btn btn-success text-white">Editar</a>
                            <a href="" class="btn btn-danger text-white">Eliminar</a>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="card-footer text-end">
                    <h6>Añade aqui una nueva mascota a tu cuenta</h6>
                    <a href="" class="btn btn-primary">Añadir</a>
                </div>
            </div>
        </di>
    </div>
</div>
@endsection