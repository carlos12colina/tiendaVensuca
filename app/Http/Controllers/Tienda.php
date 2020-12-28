<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tienda extends Controller
{
    public function inicio(){
    	return view('inicio');
    }

    public function cita(){
    	return view('cita');
    }

    public function nosotros(){
    	return view('nosotros');
    }

    public function contactenos(){
    	return view('contactenos');
    }

    public function servicios(){
    	return view('servicios');
    }

    public function detalles_servicios(){
    	return view('detalles_servicios');
    }
}
