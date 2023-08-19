<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DescargarImagenController extends Controller
{
    public function download($producto_id){
        $producto = DB::table('productos')->where('id_producto',$producto_id)->first();
        return Storage::download('public/Imagenes mp/'.$producto->imagen_producto);
    }
}
