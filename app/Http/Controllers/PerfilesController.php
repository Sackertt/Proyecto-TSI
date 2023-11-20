<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class PerfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(Gate::denies('soy_admin')){
            return view('perfiles.index',compact('usuarios'));
        }
        $usuarios = DB::table('usuarios')->get();
        return view('perfiles.index',compact('usuarios'));
    }

    public function update(Request $request, $rut)
    {
        if(Gate::denies('soy_admin')){
            return redirect('perfiles.index');
        }
        DB::table('usuarios')->where('rut', $rut)->update(['id_perfil'=>$request->perfil]);
        return redirect('perfiles.index');
    }
    public function delete($usuario)
   {
        if(Gate::denies('soy_admin')){
            return redirect()->route('perfiles.index');
        }
        if(Auth::user()->rut != $usuario){
            DB::table('usuarios')->where('rut',$usuario)->update(['eliminado'=>true]);
            DB::table('horas_esteticas')->where('rut',$usuario)->where('estado','!=','Completado')->update(['estado'=>"Usuario Eliminado"]);
        }
        return redirect()->route('perfiles.index');
   }
}
