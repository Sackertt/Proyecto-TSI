<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
   {
        $usuario = Auth()->user();
        $mascotas = DB::table('mascotas')->where('rut', $usuario->rut)->where('eliminado',false)->get();
        return view('usuario.index',compact(['mascotas','usuario']));
   }
   
}
