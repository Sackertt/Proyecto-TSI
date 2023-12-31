<?php

namespace App\Http\Controllers;

use App\Http\Requests\HorasEsteticasRequest;
use App\Models\HoraEstetica;
use App\Models\Usuario;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class HorasEsteticasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        
        $servicios = DB::table('tipos_atenciones')->get();
        $usuarios = DB::table('usuarios')->get();
        if(Auth::user()->id_perfil == 1)
        {
            if($request->fecha != null){
                $horas = DB::table('horas_esteticas')->where('fecha_servicio',$request->fecha)->orderBy('estado','asc')->orderBy('fecha_servicio','asc')->orderBy('hora_servicio', 'asc')->get();
            }
            else{
                $horas = DB::table('horas_esteticas')->orderBy('estado','asc')->orderBy('fecha_servicio','asc')->orderBy('hora_servicio', 'asc')->get();
            }

            
            
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
        $mascotas = DB::table('mascotas')->where('rut' , Auth::user()->rut)->where('eliminado',false)->get();
        $servicios = DB::table('tipos_atenciones')->get();
        
        return view('horas_esteticas.create',compact(['mascotas', 'servicios']));
    }
    public function store(HorasEsteticasRequest $request)
    {
       //Crear hora
       $hora = new HoraEstetica();
       $hora->rut = Auth::user()->rut; 
       $hora->tipo_servicio = $request->servicio;
       $hora->fecha_servicio = $request->fecha;
       $hora->hora_servicio = $request->hora;
       $hora->id_mascota = $request->mascota;
       
       $hora ->save();

       return redirect()->route('horas_esteticas.index');
    }
    public function update(Request $request,$id_hora)
    {
        $horas = DB::table('horas_esteticas')->get();
        if($horas->contains('id_hora',$id_hora))
        {
            // Usuario
            if(Gate::denies('soy_admin')){
                DB::table('horas_esteticas')->where('id_hora',$id_hora)->update(['estado'=>'Suspendida']);
                return redirect()->route('horas_esteticas.index');
            }
            // Fin Usuario

            // Admin
            if(Gate::allows('soy_admin')){
                // dd($request->estado);
                DB::table('horas_esteticas')->where('id_hora',$id_hora)->update(['estado'=> $request->estado]);

                return redirect()->route('horas_esteticas.index');
            }
            // Fin Admin
        }

       return redirect()->route('horas_esteticas.index');
    }
}
