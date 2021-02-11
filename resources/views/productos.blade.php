@extends('layouts.plantilla')

@section('title','vensuca')

@section('content')
    <!-- inner page banner -->
  <div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Tienda</h1>
                <ol class="breadcrumb">
                  <li><a href="{{ route('inicio') }}">Inicio</a></li>
                  <li class="active">Tienda</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->
  <!-- section -->
  <div class="section padding_layout_1 product_list_main">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            @if($resultados==true)
              @foreach($Productos as $producto)
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all .bg-light">
                  <div class="product_list .bg-light">
                    <div class=".bg-light"> <img class="img-responsive" src="{{ asset("assets/images/Imagenes_productos/{$producto->fraccion}.png") }}" alt=""> </div>
                    <div class="product_detail_btm .bg-light">
                      <div class="center">
                        <h4><a href="{{ route('contactenos') }}">{{$producto->nombre}}</a></h4>
                      </div>
                      <div class="product_price">
                        <p><span class="new_price"><a href="{{ route('contactenos') }}" class="btn main_bt center">Pedir</a></span></p>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach

              @else
                <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all .bg-light">
                  <p>Sin Resultados</p>
                </div>

            @endif
         </div>
         @if($Paginacion)
          {{$Productos->links()}}
         @endif
         <div class="d-flex flex-row justify-content-center alig-items-center">
           <nav aria-label="Page navigation d-flex flex-row justify-content-center alig-items-center">
              <ul class="pagination">
                @if($Paginacion==false && $pagina>1)
                  <li class="page-item">
                    <p><span class="new_price"><a href="{{ route('buscar_productos_pagina',['pagina'=>$pagina-1])}}" class="btn main_bt center">Anterior</a></span></p>
                  </li>
                @endif
                @if($Paginacion==false && $ultimaPagina==false)
                  <li class="page-item">
                    <p><span class="new_price"><a href="{{ route('buscar_productos_pagina',['pagina'=>$pagina+1])}}" class="btn main_bt center">Siguiente</a></span></p>
                  </li>
                @endif
              </ul>
           </nav>
          </div>
        </div>
        <div class="col-md-3">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>Buscar producto</h4>
            <form action="{{route('buscar_productos')}}" method="post" id="search-global-form" class="search-global">
              @csrf
              <div class="input-group stylish-input-group">
                <input class="form-control" placeholder="¿Qué desea buscar?" type="text" name="busqueda" required>
                  <span class="input-group-addon">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span> 
              </div>
            </form>
          </div>
          <div class="side_bar_blog">
            <h4>Otros servicios</h4>
            <div class="categary">
              <ul>
                <li><a href="{{route('detalles_servicios')}}"><i class="fa fa-angle-right"></i>Fabricación de mangueras</a></li>

                @if ($TodosLosProductos)
                  <li><a href="{{route('productos')}}"><i class="fa fa-angle-right"></i>Ver todos los productos</a></li>
                @endif

                <li><a download="Catálogo" href="{{ asset('assets/Catalogo.pdf') }}"><i class="fa fa-angle-right"></i>Descargar catálogo</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- end section -->

@endsection