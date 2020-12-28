<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tienda;

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
