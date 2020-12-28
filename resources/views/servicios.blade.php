@extends('layouts.plantilla')

@section('title','vensuca')

@section('menu')
    <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="it_home.html"><img src="images/logos/eslogan.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="{{ route('nosotros') }}">Sobre nosotros</a></li>
                <li> <a class="active" href="{{ route('servicios') }}">Servicios</a></li>
                <li> <a>Tienda</a>
                  <ul>
                    <li><a href="it_shop.html">Productos</a></li>
                    <li><a href="it_cart.html">Carrito de compra</a></li>
                    <li><a href="it_checkout.html">Pago</a></li>
                  </ul>
                </li>
                <li> <a href="{{ route('contactenos') }}">Contactos</a></li>
              </ul>
            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->

@endsection

@section('content')
  <!-- header bottom end -->
  </header>
  <!-- end header -->
  <!-- inner page banner -->
  <div id="inner_banner" class="section inner_banner_section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Servicios</h1>
                <ol class="breadcrumb">
                  <li><a href="{{ route('inicio') }}">Inicio</a></li>
                  <li class="active">Servicios</li>
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
  <div class="section padding_layout_1 service_list">
    <div class="container">
      <div class="row">
        <div class="col-md-4 service_blog margin_bottom_50">
          <div class="full">
            <div class="service_img"> <img class="img-responsive" src="images/it_service/fondo servi_hidraulica.jpg" alt="#" /> </div>
            <div class="service_cont">
              <h3 class="service_head">Fabricación de mangueras</h3>
              <p>Obtenga la manguera que necesita para satisfacer su necesidad.</p>
              <div class="bt_cont"> <a class="btn sqaure_bt" href="{{route('detalles_servicios')}}">Ver servicio</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->
@endsection