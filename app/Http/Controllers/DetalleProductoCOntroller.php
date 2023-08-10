<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleProductoCOntroller extends Controller
{
    public function index(){  
        return view('detalles_productos.index');
    }
}
