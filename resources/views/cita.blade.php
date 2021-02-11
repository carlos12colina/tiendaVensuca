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
                <h1 class="page-title">Pedir cita</h1>
                <ol class="breadcrumb">
                  <li><a href="{{ route('inicio') }}">Inicio</a></li>
                  <li class="active">Pedir cita</li>
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
                  <h2>Pida su cita</h2>
                </div>
              </div>
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
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 appointment_form">
                <div class="form_section">
                  <form method="post" action="{{route('envioCita')}}">
                    @csrf
                    <fieldset class="row">
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input name="nombre" class="field_custom" placeholder="Nombre" type="text" required>
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input name="apellido"  class="field_custom" placeholder="Apellido" type="text" required>
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input name="correo" class="field_custom" placeholder="Correo electrónico" type="email" required>
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input name="numero" class="field_custom" placeholder="Número de teléfono" type="text" required>
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <input name="razon" class="field_custom" placeholder="Razón" type="text" required>
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <textarea name="descripcion" class="field_custom" placeholder="Descripción" required></textarea>
                    </div>
                    <div class="center">
                      <button type="submit" class="btn main_bt">Enviar</button>
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