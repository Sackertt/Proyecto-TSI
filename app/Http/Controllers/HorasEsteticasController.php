<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HorasEsteticasController extends Controller
{
    public function index()
    {
        $mascotas = DB::table('mascotas')->where('rut' , Auth::user()->rut)->get();
        $servicios = DB::table('tipos_atenciones')->get();
        return view('horas_esteticas.index',compact(['mascotas', 'servicios']));
    }
    public function create()
    {
        //
    }
    public function store()
    {
        //
    }
}
