<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Marcas;
use App\Models\Departamentos;
use App\Models\Alternos;
use App\Mail\email;
use App\Mail\SendMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Mail;


class Tienda extends Controller
{   public function inicio(){
        $Productos = Productos::findMany([1,2,3,4,5,6,7,8,9,10,11,12]);
    	return view('inicio',compact('Productos'));
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

    public function productos(){
        $Productos = Productos::Paginate(9);
        $Paginacion=true;
        $TodosLosProductos=false;
        $resultados=true;
        return view('productos',compact('Productos','Paginacion','TodosLosProductos','resultados'));
    }

    public function buscar_productos(Request $request){
        
        //-------------algoritmo de busqueda----------------------------------------
        $Productos = Productos::all();
        $array=[];
        $array2=[];
        $cadenaCompleta=$request->input('busqueda');;
        $busqueda="";
        $contador_productos=0;
        $cantCaract=0;

        

        for($cantCaract;$cantCaract<strlen($cadenaCompleta);$cantCaract++){   

            if($cadenaCompleta[$cantCaract]==" "){

                break;
            }
            $busqueda=Str::finish($busqueda,$cadenaCompleta[$cantCaract]);
        }

        foreach ($Productos as $produc){

            $ingresado=false; 

            for($i=5;$i>=1;$i--){
                if (substr_compare (strtoupper($busqueda)  , $produc['nombre'], 0,$i, true)== 0 && $ingresado==false){
                        $bandera=1;
                        $produc->bandera = $bandera;
                        array_push($array,$produc);
                        $contador_productos++;
                        $ingresado=true;
                }
            } 
        }
        
        $contador_productos2=0;

        for($i=5;$i>=1;$i--){
            for($f=0;$f<$contador_productos;$f++){

                if (substr_compare (strtoupper($busqueda),$array[$f]->nombre, 0,$i, true)== 0 && $array[$f]->bandera==1){
                        $array[$f]->bandera=2;
                        array_push($array2,$array[$f]);
                        
                }
            }
        }

        if(strlen($cadenaCompleta)<=$cantCaract){
            $array=[];
                foreach ($array2 as $produc){
                    array_push($array,$produc);
                    $contador_productos2++;
                }
        }

        else{
            $array=[];
            $busqueda2="";
            $cantCaract++;


                for($cantCaract;$cantCaract<strlen($cadenaCompleta);$cantCaract++){   
                    
                    if($cadenaCompleta[$cantCaract]==" "){
                        break;
                    }

                    if(preg_match_all("/[\w]/", $cadenaCompleta[$cantCaract], $matches) || $cadenaCompleta[$cantCaract]=="/")
                        $busqueda2=Str::finish($busqueda2,$cadenaCompleta[$cantCaract]);
                }
          


            foreach ($array2 as $produc){
                $ingresado=false;

                for($i=strlen($busqueda2);$i>=3;$i--){   
                    $VariableEncontrar=substr($busqueda2,0,$i);
                    

                    if(Str::contains($produc['nombre'],strtoupper($VariableEncontrar))){
                        if($ingresado==false){
                            $ingresado=true;  
                            array_push($array,$produc);
                            $contador_productos2++;
                        } 
                    }
                }
            }
        }
        //----------------------------------------------------------
        //-------------------algoritmo de paginacion----------------
        Cache::put('contador_productos', $contador_productos2);
        Cache::put('productosBuscados', $array);

        
        
        $pagina=1;
        $numeroPagina=$pagina*10;
        $ultimaPagina;
        $resultados;

        if($contador_productos2==0)
            $resultados=false;

        else
            $resultados=true;

        if($numeroPagina < $contador_productos2){
            $ultimaPagina=false;
            $Productos=[];

            for($i=$numeroPagina-10;$i<$numeroPagina;$i++){
                $producto=$array[$i];
                array_push($Productos,$producto);
            }
        }

        else{
            $a=$numeroPagina-$contador_productos2;
            $b=10-$a;
            $Productos=[];
            $ultimaPagina=true;
            for($i=$numeroPagina-10;$i<$b+($numeroPagina-10);$i++){
                $product=$array[$i];
                array_push($Productos,$product);
            }

        }

        //------------------------------------------------------------
        
        $TodosLosProductos=true;
        $Paginacion=false;
        return view('productos',compact('Productos','Paginacion','TodosLosProductos','pagina','ultimaPagina','resultados'));
    }

    public function buscar_productos_pagina($pagina){
        //---------------------algoritmo de paginacion---------------------------------------

        $array = Cache::get('productosBuscados');
        $contador_productos2 = Cache::get('contador_productos');

        $numeroPagina=$pagina*10;
        $ultimaPagina;
        $resultados=true;


        if($numeroPagina < $contador_productos2){
            $ultimaPagina=false;
            $Productos=[];

            for($i=$numeroPagina-10;$i<$numeroPagina;$i++){
                $product=$array[$i];
                array_push($Productos,$product);
            }
        }

        else{
            $a=$numeroPagina-$contador_productos2;
            $b=10-$a;
            $Productos=[];
            $ultimaPagina=true;
            for($i=$numeroPagina-10;$i<$b+($numeroPagina-10);$i++){
                $product=$array[$i];
                array_push($Productos,$product);
            }

        }

       /* $numeroPagina=$pagina*10;

        if($numeroPagina < $contador_productos){

            $Productos=[];

            for($i=$numeroPagina-10;$i<$numeroPagina;$i++){
                $producto=$array2[$i];
                array_push($Productos,$producto);
            }
        }

        else{
            $a=$numeroPagina-$contador_productos;
            $b=10-$a;

            for($i=$numeroPagina-10;$i<$b+($numeroPagina-10);$i++){
                $producto=$array2[$i];
                array_push($Productos,$producto);
            }

        }*/

        //-----------------------------------------------------------------------------------
        $TodosLosProductos=true;
        $Paginacion=false;
        return view('productos',compact('Productos','Paginacion','TodosLosProductos','pagina','ultimaPagina','resultados'));
       
    }

    public function envioRapido(Request $request){
        $this->validate($request, [
          'message' =>  'required'
         ]);
         
        $data = array(
            'tipoMensaje'   =>   'rapido',
            'message'   =>   $request->input('message')
        );

        Mail::to('carlos12colina@gmail.com')->send(new email($data));

        return redirect() -> route('inicio');
    }

    public function envioCita(Request $request){
        $this->validate($request, [
          'nombre' =>  'required',
          'apellido' =>  'required',
          'correo' =>  'required',
          'numero' =>  'required',
          'razon' =>  'required',
          'descripcion' =>  'required',
         ]);
         
        $data = array(
            'tipoMensaje'   =>   'cita',
            'nombre'   =>   $request->input('nombre'),
            'apellido'   =>   $request->input('apellido'),
            'correo'   =>   $request->input('correo'),
            'numero'   =>   $request->input('numero'),
            'razon'   =>   $request->input('razon'),
            'descripcion'   =>   $request->input('descripcion')
        );

        Mail::to('carlos12colina@gmail.com')->send(new email($data));

        return redirect() -> route('cita');
    }

    public function envioContacto(Request $request){
        $this->validate($request, [
          'nombre' =>  'required',
          'numero' =>  'required',
          'correo' =>  'required',
          'mensaje' =>  'required',
         ]);
         
        $data = array(
            'tipoMensaje'   =>   'contacto',
            'nombre'   =>   $request->input('nombre'),
            'numero'   =>   $request->input('numero'),
            'correo'   =>   $request->input('correo'),
            'mensaje'   =>   $request->input('mensaje')
        );

        Mail::to('carlos12colina@gmail.com')->send(new email($data));

        return redirect() -> route('contactenos');
    }

    public function detalles_producto($id){
        $articulo= Productos::where("id",$id)->first(['id']);
        return view('detalles_product');
    }

    public function carrito_compras(){
        return view('carrito_compras');
    }

}
