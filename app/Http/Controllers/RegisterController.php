<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }
    public function store(RegisterRequest $request){
        $usuario = new Usuario();
        $usuario->rut = $request->rut;
        $usuario->password = Hash::make($request->password);
        $usuario->nombre = $request->nombre;
        $usuario->fono = $request->fono;
        $usuario->direccion = $request->direccion;
        $usuario->id_perfil = 2;
        $usuario->save();
        return redirect()->route('home.index');
    }
}
