<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function login(Request $request)
    {
        $rut = $request->rut;
        $password = $request->contraseña;
        
        
        if(Auth::attempt(['rut'=>$rut,'password'=>$password,'eliminado' => false])){
            
            return redirect()->route('home.index');
        }

        return back()->withErrors([
            'user' => 'Credenciales Incorrectas',
        ])->onlyInput('user');
    }
}
