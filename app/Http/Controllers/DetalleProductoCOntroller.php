<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetalleProductoCOntroller extends Controller
{
    public function index($producto_id){  
        $producto = DB::table('productos')->where('id_producto',$producto_id)->first();
        if($producto != null){
            return view('detalles_productos.index', compact('producto'));
        }
        else{
            return redirect('/producto');
        }
    }
        
}
