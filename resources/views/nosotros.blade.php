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
                <li><a class="active" href="{{ route('nosotros') }}">Sobre nosotros</a></li>
                <li> <a href="{{ route('servicios') }}">Servicios</a></li>
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
	</header>
	<!-- end header -->
	<!-- inner page banner -->
	<div id="inner_banner" class="section inner_banner_section2">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12">
	        <div class="full">
	          <div class="title-holder">
	            <div class="title-holder-cell text-left">
	              <h1 class="page-title">Sobre nosotros</h1>
	              <ol class="breadcrumb">
	                <li><a href="{{ route('inicio') }}">Inicio</a></li>
	                <li class="active">Sobre nosotros</li>
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
	<div class="section padding_layout_1">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12">
	        <div class="full">
	          <div class="main_heading text_align_center">
	            <h2>Somos más que un proveedor</h2>
	            <p class="large">Ofrecemos una gran gama de productos de acuerdo a tus necesidades</p>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="row about_blog">
	      <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
	        <div class="full text_align_left text-justify">
	          <h3>¿Qué productos vendemos?</h3>
	          <p> Brindamos una gran variedad de productos que van desde tornillos o arandelas, hasta filtros para camiones, nos aseguramos de que usted pueda recibir el producto justo a la medida que requiere para su proyecto o restauración, además, ofrecemos un servicio de reparación y fabricación de mangueras en nuestro departamento de hidráulica, donde, le ayudaremos con una manguera capaz de soportar el duro trabajo que usted le otorgará.</p>
	        </div>
	      </div>
	      <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0">
	        <div class="full text_align_center"> <img class="img-responsive" src="images/it_service/imagen_nosotros.jpg" alt="#" /> </div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- end section -->
@endsection