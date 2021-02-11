@extends('layouts.plantilla')

@section('title','vensuca')

@section('busqueda')
  <div class="search_icon">
    <ul>
      <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
    </ul>
  </div>
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
            <div class="service_img"> <img class="img-responsive" src="{{ asset('assets/images/it_service/fondo servi_hidraulica.jpg') }}" alt="#" /> </div>
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