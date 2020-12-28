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
                <li> <a href="{{ route('servicios') }}">Servicios</a></li>
                <li> <a>Tienda</a>
                  <ul>
                    <li><a href="it_shop.html">Productos</a></li>
                    <li><a href="it_cart.html">Carrito de compra</a></li>
                    <li><a href="it_checkout.html">Pago</a></li>
                  </ul>
                </li>
                <li> <a class="active" href="{{ route('contactenos') }}">Contactos</a></li>
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
  <div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Contactenos</h1>
                <ol class="breadcrumb">
                  <li><a href="{{ route('inicio') }}">Inicio</a></li>
                  <li class="active">Contactenos</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->
  <div class="section padding_layout_1">
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="full">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="main_heading text_align_center">
                  <h2>Ponerse en contacto</h2>
                </div>
              </div>
              <div class="contact_information">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                  <div class="information_bottom text_align_center">
                    <div class="icon_bottom"> <i class="fa fa-road" aria-hidden="true"></i> </div>
                    <div class="info_cont">
                      <h4>Calle Plaza con Calle Regeneración</h4>
                      <p>Puerto Cabello, Carabobo, Venezuela</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                  <div class="information_bottom text_align_center">
                    <div class="icon_bottom"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                    <div class="info_cont">
                      <h4>0242-3613776</h4>
                      <p>Lunes-Viernes 8:00am-5:00pm</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                  <div class="information_bottom text_align_center">
                    <div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                    <div class="info_cont">
                      <h4>vensucarh2012@gmail.com</h4>
                      <p>Soporte en linea 24/7</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
                <h2 class="text_align_center">Enviar mensaje</h2>
                <div class="form_section">
                  <form class="form_contant" action="index.html">
                    <fieldset>
                    <div class="row">
                      <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input class="field_custom" placeholder="Nombre" type="text">
                      </div>
                      <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input class="field_custom" placeholder="Teléfono" type="text">
                      </div>
                      <div class="field col-lg-12 col-md-6 col-sm-12 col-xs-12">
                        <input class="field_custom" placeholder="Correo electrónio" type="email">
                      </div>
                      <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <textarea class="field_custom" placeholder="Mensaje"></textarea>
                      </div>
                      <div class="center"><a class="btn main_bt" href="#">Enviar ahora</a></div>
                    </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection