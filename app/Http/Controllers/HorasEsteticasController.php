<?php

namespace App\Http\Controllers;

use App\Http\Requests\HorasEsteticasRequest;
use App\Models\HoraEstetica;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HorasEsteticasController extends Controller
{
    public function index()
    {
        
        $servicios = DB::table('tipos_atenciones')->get();
        $usuarios = DB::table('usuarios')->get();
        if(Auth::user()->id_perfil == 1)
        {
            $horas = DB::table('horas_esteticas')->orderBy('fecha_servicio','asc')->get();
            $mascotas = DB::table('mascotas')->get();
        }
        elseif(Auth::user()->id_perfil == 2)
        {
            $horas = DB::table('horas_esteticas')->where('rut',Auth::user()->rut)->orderBy('fecha_servicio','asc')->get();
            $mascotas = DB::table('mascotas')->where('rut', Auth::user()->rut)->get();
        };

        return view('horas_esteticas.index', compact(['horas','mascotas','servicios','usuarios']));
    }
    public function create()
    {
        $mascotas = DB::table('mascotas')->where('rut' , Auth::user()->rut)->get();
        $servicios = DB::table('tipos_atenciones')->get();
        
        return view('horas_esteticas.create',compact(['mascotas', 'servicios']));
    }
    public function store(HorasEsteticasRequest $request)
    {
        // Validaciones
        $mascotas = DB::table('mascotas')->where('rut',Auth::user()->rut)->get();
        $mascotar = $request->mascota;
        foreach($mascotas as $mascota){
            if($mascota->id_mascota == $mascotar){

                //Crear hora
                $hora = new HoraEstetica();
                $hora->rut = Auth::user()->rut; 
                $hora->tipo_servicio = $request->servicio;
                $hora->fecha_servicio = $request->fecha;
                $hora->id_mascota = $mascotar;
                
                $hora ->save();

                return redirect()->route('horas_esteticas.index');
            }
        }
        return redirect()->route('horas_esteticas.index');
    }
}
