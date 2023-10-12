@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
    
    <div class="row">
        <div class="col-0 col-md-3"></div>
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    <h3>Registrar Usuario</h3>
                </div>
                <div class="card-body">
                <form method="POST" action="{{route('register.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                <label for="rut" class="form-label">Rut</label>
                                <input type="rut" name="rut" class="form-control" id="rut" placeholder="XXXXXXXX-X" value="{{old('rut')}}">
                                </div>
                                <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="nombre" value="{{old('nombre')}}">
                                </div>
                                <div class="mb-3">
                                <label for="direccion" class="form-label">Direccion</label>
                                <input type="text" name="direccion" class="form-control" id="direccion" value="{{old('direccion')}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                <label for="fono" class="form-label">Telefono</label>
                                <input type="text" name="fono" class="form-control" id="fono" placeholder="9XXXXXXXX" value="{{old('fono')}}">
                                </div>
                                <div class="mb-3">
                                <label for="contraseña" class="form-label">Contraseña</label>
                                <input type="password" name="password" class="form-control" id="contraseña" value="">
                                </div>
                                <div class="mb-3">
                                <label for="contraseña2" class="form-label">Confirmar Contraseña</label>
                                <input type="password" name="password2" class="form-control" id="contraseña2" value="">
                                </div>
                               
                                <div class="text-end mx-3 ">
                                <button type="submit" class="btn btn-primary px-3">Registrar Usuario</button>
                                </div>
                                
                            </div>
                        </div>
                    
                        
                    </form>
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
@endsection