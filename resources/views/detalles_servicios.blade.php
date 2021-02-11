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

  </header>
  <!-- end header -->
  <!-- inner page banner -->
  <div id="inner_banner" class="section inner_banner_section4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Detalles servicios</h1>
                <ol class="breadcrumb">
                  <li><a href="{{ route('inicio') }}">Inicio</a></li>
                  <li class="active">Detalles servicios</li>
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
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-12 service_blog margin_bottom_50">
              <div class="full">
                <div class="service_img"> <img class="img-responsive" src="{{ asset('assets/images/it_service/servicios de hidraulica.jpg') }}" alt="#" /> </div>
                <div class="service_cont">
                  <h2 class="service_head">Fabricación de mangueras</h2>
                  <p>En nuestro departamento de hidráulica dispondrá de nuestro técnico experto en el área, donde le ayudará con una solución a su problema, bien sea, algún tipo de producto que necesite, reparación ó fabricación de una manguera para solventar su problema.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
            <div class="side_bar_blog">
              <h4>Otros servicios</h4>
              <div class="categary">
                <ul>
                  <li><a ><i class="fa fa-angle-right"></i> Sin mas servicios</a></li>
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