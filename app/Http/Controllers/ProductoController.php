<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index(Request $request){
        
        $tipos = DB::table('tipos_productos')->get();
        $tipo = $request->tipo;
        $productos = DB::table('productos')->get();
        if($tipos ->contains('id_tipo',$tipo)){
            $productos = DB::table('productos')->where('tipo_producto',$tipo)->get();
        }else{
            $productos = DB::table('productos')->get();
        }
        return view('productos.index', compact(['productos','tipos']));
    }
}
