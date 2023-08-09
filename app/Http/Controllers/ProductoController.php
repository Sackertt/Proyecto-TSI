<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index(){
        $productos = DB::table('productos')->get();
        return view('productos.index', compact('productos'));
     }
}
