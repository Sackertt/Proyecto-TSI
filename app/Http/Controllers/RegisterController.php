<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        $perfiles = DB::table('tipos_perfiles')->get();
        return view('register.index',compact('perfiles'));
    }
    public function store(RegisterRequest $request){
        $usuario = new Usuario();
        $usuario->rut = $request->rut;
        $usuario->password = Hash::make($request->password);
        $usuario->nombre = $request->nombre;
        $usuario->fono = $request->fono;
        $usuario->direccion = $request->direccion;
        
        //ADMIN
        if(Gate::allows('soy_admin')){
            $usuario->id_perfil = $request->tipo_perfil;
        }else{
            //USUARIO/NO REGISTRADO
            $usuario->id_perfil = 2;
            //FIN USUARIO
        };
        //FIN ADMIN
       
        $usuario->save();
        return redirect()->route('home.index');
    }
}
