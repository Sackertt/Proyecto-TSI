<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function index()
   {
        if (Auth::check()) 
        {   
            $usuario = Auth()->user();
            $mascotas = DB::table('mascotas')->where('rut', $usuario->rut)->get();
            return view('usuario.index',compact(['mascotas','usuario']));
        }
        else
        {
            return redirect()->route('home.index');
        }
     
   }
}
