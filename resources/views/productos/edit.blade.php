@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
    <div class="row">
        <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="text-center">Editar Producto</h3>
                    </div>
                <div class="card-body">
                    <form action="">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Inserte Nombre Producto">
                                </div>
                                <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="precio" placeholder="Inserte Precio Producto">
                                </div>
                                <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <textarea class="form-control" id="descripcion" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                <label for="imagen" class="form-label">Seleccione Imagen de producto</label>
                                <input class="form-control" type="file" id="imagen">
                                </div>
                                <label>Tipo de Producto</label>
                                @foreach($tipos as $tipo)
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo" id="flexRadioDefault1" value="{{$tipo->id_tipo}}">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    {{$tipo->nombre_tipo}}
                                </label>
                                </div>
                                @endforeach
                                
                            </div>
                            <div class="col-12 text-end" >
                            <button type="submit" class="btn btn-primary px-3">Actualizar datos</button>  
                            </div>
                            
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection