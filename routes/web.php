<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tienda;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[Tienda::class,'inicio'])->name('inicio');

Route::get('/cita',[Tienda::class,'cita'])->name('cita');

Route::get('/nosotros',[Tienda::class,'nosotros'])->name('nosotros');

Route::get('/contactenos',[Tienda::class,'contactenos'])->name('contactenos');

Route::get('/servicios',[Tienda::class,'servicios'])->name('servicios');

Route::get('/detalles_servicios',[Tienda::class,'detalles_servicios'])->name('detalles_servicios');

Route::get('/productos',[Tienda::class,'productos'])->name('productos');

Route::post('/buscar_productos',[Tienda::class,'buscar_productos'])->name('buscar_productos');
Route::get('/buscar_productos_pagina/{pagina}',[Tienda::class,'buscar_productos_pagina'])->name('buscar_productos_pagina');

Route::post('/envioRapido',[Tienda::class,'envioRapido'])->name('envioRapido');

Route::post('/envioCita',[Tienda::class,'envioCita'])->name('envioCita');

Route::post('/envioContacto',[Tienda::class,'envioContacto'])->name('envioContacto');

Route::get('/detalles_producto/{id}',[Tienda::class,'detalles_producto'])->name('detalles_producto');

Route::get('/carrito_compras',[Tienda::class,'carrito_compras'])->name('carrito_compras');