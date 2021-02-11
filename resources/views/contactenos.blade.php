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
                <h2 class="text_align_center">Realice sus pedidos por aquí</h2>
                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                <div class="form_section">
                  <form method="post" action="{{route('envioContacto')}}">
                    @csrf
                    <fieldset>
                    <div class="row">
                      <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="nombre" class="field_custom" placeholder="Nombre" type="text" required>
                      </div>
                      <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="numero" class="field_custom" placeholder="Teléfono" type="text" required>
                      </div>
                      <div class="field col-lg-12 col-md-6 col-sm-12 col-xs-12">
                        <input name="correo" class="field_custom" placeholder="Correo electrónio" type="email" required>
                      </div>
                      <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <textarea name="mensaje" class="field_custom" placeholder="Mensaje" required></textarea>
                      </div>
                      <button type="submit" class="btn main_bt center">Enviar ahora</button>
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