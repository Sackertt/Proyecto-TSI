<?php

namespace App\Http\Controllers;

use App\Http\Requests\MascotasEditRequest;
use App\Http\Requests\MascotasRequest;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MascotaController extends Controller
{ 
   public function __construct()
    {
        $this->middleware('auth');
    }
   
   public function create()
   {
     return view('mascotas.create');
   }
   public function store(MascotasRequest $request)
   {
      $mascota = new Mascota();
      $mascota -> nombre_mascota = $request->nombre;
      $mascota -> tamaño_mascota = $request->tamaño;
      $mascota -> especie_mascota = $request->especie;//Cambiar en el form
      //$mascota -> raza_mascota = $request->raza; // Cambiar en el formulario

      $mascota -> rut = Auth::user()->rut;

      $mascota -> save();
      return redirect()->route('home.index');
   }
   public function edit($mascota)
   {
      $mascota = DB::table("mascotas")->where('id_mascota',$mascota)->first();
      return view('mascotas.edit',compact('mascota'));
   }
   public function update(MascotasEditRequest $request, $mascota)
   {
      Db::table('mascotas')->where('id_mascota',$mascota)
      ->update(['tamaño_mascota'=> $request->tamaño]);
      return redirect()->route('home.index');
   }
   public function delete($mascota)
   {
      // Aqui debemos eliminar la mascota y todo las horas relacionadas a este
      DB::table('horas_esteticas')->where('id_mascota',$mascota)->delete();

      DB::table('mascotas')->where('id_mascota',$mascota)->delete();

      return back();
   }
}
