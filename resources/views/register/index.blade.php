@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
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
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="contraseña" value="{{old('contraseña')}}">
                        </div>
                        <div class="mb-3">
                        <label for="fono" class="form-label">Telefono</label>
                        <input type="text" name="fono" class="form-control" id="fono" placeholder="9XXXXXXXX" value="{{old('fono')}}">
                        </div>
                        <div class="text-end mx-3 mt-5">
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
@endsection