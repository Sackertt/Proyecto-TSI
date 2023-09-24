<?php

use App\Http\Controllers\DescargarImagenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DetalleProductoController;
use App\Http\Controllers\GestionProductoController;
use App\Http\Controllers\HorasEsteticasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Auth\Events\Logout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Inicio de la pagina
Route::get('/',[HomeController::class,'index'])->name('home.index');
//Sesion
Route::get('/usuario',[UsuarioController::class,'index'])->name('usuario.index');

Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'login'])->name('login.login');

Route::get('/register',[RegisterController::class,'index'])->name('register.index');
Route::post('/register',[RegisterController::class,'store'])->name('register.store');

Route::get('/logout', [LogoutController::class,'logout'])->name('logout.logout');

//Ver catalogo
Route::get('/producto',[ProductoController::class,'index'])->name('productos.index');


//Gestion Productos
Route::get('/gestion',[GestionProductoController::class,'index'])->name('gestion_productos.index');
Route::get('/producto/edit/{producto_id}',[GestionProductoController::class,'edit'])->name('gestion_productos.edit');
Route::put('/producto/edit/{producto_id}',[GestionProductoController::class,'update'])->name('gestion_productos.update');
Route::get('/producto/create',[GestionProductoController::class,'create'])->name('gestion_productos.create');
Route::post('/producto/create',[GestionProductoController::class,'store'])->name('gestion_productos.store');
Route::get('/producto/create',[GestionProductoController::class,'create'])->name('gestion_productos.create');
Route::get('/producto/delete/{producto}',[GestionProductoController::class,'destroy'])->name('gestion_productos.destroy');

//Descargar Imagen
Route::get('/producto/download/{producto}',[DescargarImagenController::class,'download'])->name('gestion_productos.download');

//Detalles Productos
Route::get('/producto/{producto}',[DetalleProductoController::class,'index'])->name('detalles_productos.index');

//Mascotas

Route::get('/mascotas/create',[MascotaController::class,'create'])->name('mascotas.create');
Route::post('/mascotas/create',[MascotaController::class,'store'])->name('mascotas.store');

Route::get('/mascotas/edit/{mascota}',[MascotaController::class,'edit'])->name('mascotas.edit');
Route::put('/mascotas/edit/{mascota}',[MascotaController::class,'update'])->name('mascotas.update');

//Horas Esteticas
Route::get("/horas_esteticas/nueva",[HorasEsteticasController::class, 'create'])->name('horas_esteticas.create');
Route::post("/horas_esteticas/nueva",[HorasEsteticasController::class, 'store'])->name('horas_esteticas.store');


