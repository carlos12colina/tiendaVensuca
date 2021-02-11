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
	      <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog ">
	        <div class="full text_align_left text-justify text-dark">
	          <h3 class=".text-dark">¿Qué productos vendemos?</h3>
	          <p class=".text-dark"> Brindamos una gran variedad de productos que van desde tornillos o arandelas, hasta filtros para camiones, nos aseguramos de que usted pueda recibir el producto justo a la medida que requiere para su proyecto o restauración, además, ofrecemos un servicio de reparación y fabricación de mangueras en nuestro departamento de hidráulica, donde, le ayudaremos con una manguera para solventar su situación.</p>
	          <br>
	          <h3 class=".text-dark">Misión</h3>
	          <p class=".text-dark">Es una Empresa líder en la comercialización de  artículos de ferretería en general mecánicos, industriales y navales cuyo norte se encuentra dirigido a la satisfacción de las necesidades de las empresas consumidoras y distribuidoras, grandes y pequeños clientes, vendedores independientes y en fin, todos aquellos interesados en satisfacer sus demandas mediante el ofrecimiento de nuestros productos, garantizándoles los más altos estándares de calidad, y precios competitivos. La meta de nuestro personal consiste en ofrecer una alta confiablidad, asesoría personalizada y una altísima capacitación incesante; contribuyendo de esta manera al mejoramiento del sistema comercial y al desarrollo nacional.</p>
	          <br>
	          <h3 class=".text-dark">Visión</h3>
	          <p class=".text-dark">Está orientada en ser una Empresa líder en importación, comercialización y distribución de tornillos tuercas y afines, tanto en Venezuela como en los mercados de América Latina, donde participa mediante adquisiciones y alianzas estratégicas las cuales aseguran el valor para nuestra empresa y cartera de clientes. "VENSUCA RH 2012, C.A" también, impulsamos la generación y propagación del conocimiento en el área comercial, tecnológica y gerencial en la Tornillería para mantenerse como empresa líder en este campo del tornillo.</p>
	        </div>
	      </div>
	      <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0" style="margin-top: 2%">
	      	<div class="full text_align_center"> <img class="img-responsive rounded-left shadow-lg p-3 mb-5 bg-white " style="border-radius: 20px;"  src="{{ asset('assets/images/it_service/tornillos.jpeg') }}" width="90%" alt="Puerto Cabello" /> </div>
	      	<div class="full text_align_center"> <img class="img-responsive rounded-left shadow-lg p-3 mb-5 bg-white " style="border-radius: 20px;"  src="{{ asset('assets/images/it_service/imagen_nosotros.jpg') }}" alt="Puerto Cabello" /> </div>
	        <div class="full text_align_center"> <img class="img-responsive rounded-left shadow-lg p-3 mb-5 bg-white " style="border-radius: 20px;"  src="{{ asset('assets/images/it_service/filtros.jpeg') }}" width="80%" alt="Puerto Cabello" /> </div>
	        
	        
	      </div>
	    </div>
	  </div>
	</div>
	<!-- end section -->
@endsection