<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditarProductosRequest;
use App\Http\Requests\ProductosRequest;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function index(Request $request){
        
        $tipos = DB::table('tipos_productos')->get();
        $tipo = $request->tipo;
        $productos = DB::table('productos')->get();
        if($tipos ->contains('id_tipo',$tipo)){
            $productos = DB::table('productos')->where('tipo_producto',$tipo)->get();
        }else{
            if($request->busqueda != ''){
                $productos = DB::table('productos')->where('nombre_producto','LIKE','%'.$request->busqueda.'%')->get();
            }
        }
        return view('productos.index', compact(['productos','tipos']));
    }

    
}
