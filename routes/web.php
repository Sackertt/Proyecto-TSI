<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DetalleProductoController;

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

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/producto',[ProductoController::class,'index'])->name('productos.index');
Route::get('/producto/edit',[ProductoController::class,'edit'])->name('productos.edit');

Route::get('/producto/{producto}',[DetalleProductoController::class,'index'])->name('detalles_productos.index');


