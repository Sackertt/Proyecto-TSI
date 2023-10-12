@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
    <div class="row">
        <div class="col">
               <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Lista de Productos</h3>
                    </div>
                    <div class="card-body tamaño-tabla">
                        <div class="row">
                            <div class="col">
                                <form action="{{route('gestion_productos.index')}}">
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-8">
                                        <select class="form-select" name="tipo" aria-label="Default select example">
                                        <option value="XD">Seleccione Filtro de Productos</option>
                                        @foreach($tipos as $tipo)
                                        <option value="{{$tipo->id_tipo}}">{{$tipo->nombre_tipo}}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                        <div class="col-6 col-md-2 text-end">
                                            <button class="btn btn-primary  px-3 " type="submit">Aplicar Filtro</button>
                                        </div>
                                        <div class="col-6 col-md-2 text-start">
                                            <a href="{{route('gestion_productos.index')}}" class="btn btn-danger text-white px-3">Borrar Filtros</a>
                                        </div>
                                    </div> 
                                </form>
                            </div>
                        </div>
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Nombre</th>
                            <th scope="col" class="text-center">Precio</th>
                            <th scope="col" class="text-center">Tipo Producto</th>  
                            <th scope="col" class="text-center">Imagen Producto</th>
                            <th scope="col" class="text-center">Gestion</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                                <tr>
                                <th scope="row" class="text-center">{{$producto->id_producto}}</th>
                                <td class="text-center">{{$producto->nombre_producto}}</td>
                                <td class="text-center">{{$producto->precio_producto}}</td>
                                <td class="text-center">{{$producto->tipo_producto}}</td>
                                <td class="text-center">
                                    {{$producto->imagen_producto}}
                                    <a href="{{route('gestion_productos.download',$producto->id_producto)}}" class="btn btn-success text-white ms-3 text-end">Descargar</a>
                                </td>
                                <td class="text-center">
                                <a href="{{route('gestion_productos.edit',$producto->id_producto)}}" class="btn btn-primary text-white px-3 me-1">Editar</a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger text-white ms-1 px-3" data-bs-toggle="modal" data-bs-target="#eliminarModal.{{$producto->id_producto}}">
                                Eliminar
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="eliminarModal.{{$producto->id_producto}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Desea Eliminar Producto?</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col"><h5>Detalles:</h5>
                                                <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col" class="text-center">ID</th>
                                                    <th scope="col" class="text-center">Nombre</th>
                                                    <th scope="col" class="text-center">Precio</th>
                                                    <th scope="col" class="text-center">Tipo Producto</th>  
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row" class="text-center">{{$producto->id_producto}}</th>
                                                    <td class="text-center">{{$producto->nombre_producto}}</td>
                                                    <td class="text-center">{{$producto->precio_producto}}</td>
                                                    <td class="text-center">{{$producto->tipo_producto}}</td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                            </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <a class="btn btn-danger text-white" href="{{route('gestion_productos.destroy',$producto->id_producto)}}">Confirmar accion</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                        <div class="text-end">
                        <a class="btn btn-primary text-white text-end" href="{{route('gestion_productos.create')}}">Crear Producto</a>
                        </div>
                       
                    </div>
               </div>
        </div>
    </div>
</div>
@endsection