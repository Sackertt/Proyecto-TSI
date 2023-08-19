<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditarProductosRequest;
use App\Http\Requests\ProductosRequest;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GestionProductoController extends Controller
{
    public function index(){
        $productos = DB::table('productos')->get();
        return view('gestion_productos.index',compact('productos'));
    }
    public function edit($producto_id) 
    {
        $productos = DB::table('productos')->get();
        if($productos ->contains('id_producto', $producto_id)){
            $producto = DB::table('productos')->where('id_producto', $producto_id)->first();
        }
        else{
            return redirect('/producto');
        }

        $tipos = DB::table('tipos_productos')->get();
        return view('gestion_productos.edit',compact(['tipos','producto']));   
    }
    public function update(EditarProductosRequest $request,$producto)
    {
        DB::table('productos')->where('id_producto', $producto)
        ->update(['nombre_producto' => $request->nombre,
        'precio_producto' => $request->precio,
        'descrip_producto' => $request->descripcion,
        'tipo_producto' => $request->tipo,
        ]);

        // $producto->nombre_producto = $request->nombre;
        // $producto->precio_producto = $request->precio;
        // $producto->descrip_producto = $request->descripcion;
        // $producto->cantidad_producto  =$request->cantidad_producto;
        // $producto->tipo_producto = $request->tipo;
        
        // $producto->save();

        return redirect()->route('gestion_productos.index');
    }

    public function store(ProductosRequest $request)
    {
        $producto = new Producto();
        $producto->nombre_producto = $request->nombre;
        $producto->cantidad_producto = 1;
        $producto->precio_producto = $request->precio;
        $producto->descrip_producto = $request->descripcion;
        $producto->tipo_producto = $request->tipo;
        // IMAGEN
        $file = $request->file('imagen');
        $name = $file->getClientOriginalName();
        $file->storeAs('',$name,'public');
        $producto->imagen_producto = $name;
        //GUARDAR
        $producto->save();
        return redirect()->route('gestion_productos.index');
    }
    public function create() 
    {
        $tipos = DB::table('tipos_productos')->get();
        return view('gestion_productos.create',compact('tipos'));   
    }
    public function destroy($producto)
    {
        $productos = DB::table('productos')->get();
        if ($productos->contains('id_producto',$producto)){
            $productos = DB::table('productos')->where('id_producto', $producto)->first();
            Storage::delete('public/Imagenes mp/'.$productos->imagen_producto);
            DB::table('productos')->where('id_producto', $producto)->delete();
            return redirect()->route('gestion_productos.index');
        }else{
            return redirect()->route('gestion_productos.index');
        }
    }
}
