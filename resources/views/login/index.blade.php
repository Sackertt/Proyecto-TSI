@extends('template.master')
@section('contenidoPrincipal')
<div class="container-fluid">
    <div class="row">
        <div class="col-0 col-md-3"></div>
        <div class="col-12 col-md-6">
        <div class="card">
        <div class="card-header text-center bg-primary text-white">
            <h3>Iniciar Sesion</h3>
        </div>
        <div class="card-body">
        <form method="POST" action="{{route('login.login')}}">
                @csrf
                <div class="col mb-3">
                <label for="rut" class="form-label">Rut</label>
                <input type="rut" name="rut" class="form-control" id="rut">
                </div>
                <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" name="contraseña" class="form-control" id="contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
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
        <div class="card-footer text-end">
            <h6>Si no tienes cuenta crea una aqui</h6>
            <a href="{{route('register.index')}}" class="btn btn-primary ">Registrar</a>
        </div>
    </div>
        </div>
    </div>
   
</div>
@endsection