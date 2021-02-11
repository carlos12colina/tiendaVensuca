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
  <!-- section -->
  <div id="slider" class="section main_slider">
    <div class="container-fuild">
      <div class="row">
        <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
          <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <li data-index="rs-1812" class="bg-success" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ asset('assets/images/it_service/fondo_inicio.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Inicio" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('assets/images/it_service/fondo_inicio.jpg') }}"  alt="#"  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. BG -->
                <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                                id="slide-270-layer-1012" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                                data-transform_out="s:300;s:300;" 
                                data-start="750" 
                                data-basealign="slide" 
                                data-responsive_offset="on" 
                                data-responsive="off"
                                style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-912" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                                data-width="500"
                                data-height="140"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;" 
                                data-mask_out="x:inherit;y:inherit;" 
                                data-start="2000" 
                                data-responsive_offset="on" 
                                style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-112" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-fontsize="['70','70','70','35']"
                                data-lineheight="['70','70','70','50']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="1000" 
                                data-splitin="chars" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-elementdelay="0.05" 
                                style="z-index: 6; white-space: nowrap;">Tornilleria e Hidráulica </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-412" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="1500" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                style="z-index: 7; white-space: nowrap;"> Y muchas otras cosas </div>
              </li>
              <li data-index="rs-181" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ asset('assets/images/it_service/fondo_tornilleria.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Tornillería" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('assets/images/it_service/fondo_tornilleria.jpg') }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. BG -->
                <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                                id="slide-270-layer-101" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                                data-transform_out="s:300;s:300;" 
                                data-start="750" 
                                data-basealign="slide" 
                                data-responsive_offset="on" 
                                data-responsive="off"
                                style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-91" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                                data-width="500"
                                data-height="140"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;" 
                                data-mask_out="x:inherit;y:inherit;" 
                                data-start="2000" 
                                data-responsive_offset="on" 
                                style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-11" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-fontsize="['70','70','70','35']"
                                data-lineheight="['70','70','70','50']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="1000" 
                                data-splitin="chars" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-elementdelay="0.05" 
                                style="z-index: 6; white-space: nowrap;">Tornillos de diferentes tipos</div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-41" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="1500" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                style="z-index: 6; white-space: nowrap;">y medidas </div>
              </li>
              <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ asset('assets/images/it_service/fondo_hidraulica.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Hidráulica" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('assets/images/it_service/fondo_hidraulica.jpg') }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. BG -->
                <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                                id="slide-270-layer-10" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                                data-transform_out="s:300;s:300;" 
                                data-start="750" 
                                data-basealign="slide" 
                                data-responsive_offset="on" 
                                data-responsive="off"
                                style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-9" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                                data-width="500"
                                data-height="140"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;" 
                                data-mask_out="x:inherit;y:inherit;" 
                                data-start="2000" 
                                data-responsive_offset="on" 
                                style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-1" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-fontsize="['70','70','70','35']"
                                data-lineheight="['70','70','70','50']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="1000" 
                                data-splitin="chars" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-elementdelay="0.05" 
                                style="z-index: 6; white-space: nowrap;">Reparación y fabricación</div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                                id="slide-18-layer-4" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="1500" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                style="z-index: 7; white-space: nowrap;">de mangueras</div>
              </li>
            </ul>
            <div class="tp-static-layers"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->
  <!-- section -->
  <div class="section padding_layout_1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="main_heading text_align_center">
              <h2>Vensuca su mejor aliado</h2>
              <p class="large">Obtenga lo que necesita para su reparación naval, automotriz, industrial y doméstica al mejor precio!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="full text_align_center margin_bottom_30">
            <div class="center">
              <div class="icon"> <img src="{{ asset('assets/images/it_service/Tornillos.png') }}" alt="#" /> </div>
            </div>
            <h4 class="theme_color">Tornillería</h4>
            <p>Tornillos, arandelas y otros tipos de productos a la medida que guste</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="full text_align_center margin_bottom_30">
            <div class="center">
              <div class="icon"> <img src="{{ asset('assets/images/it_service/Hidraulica.png') }}" alt="#" /> </div>
            </div>
            <h4 class="theme_color">Hidráulica</h4>
            <p>Mangueras y conexiones de diferentes tipos para su proyecto</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="full text_align_center margin_bottom_30 margin_0">
            <div class="center">
              <div class="icon"> <img src="{{ asset('assets/images/it_service/servicios.png') }}" alt="#" /> </div>
            </div>
            <h4 class="theme_color">Servicios hidráulicos</h4>
            <p>Fabricación o reparación de mangueras hidráulicas</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="full text_align_center margin_bottom_30">
            <div class="center">
              <div class="icon"> <img src="{{ asset('assets/images/it_service/ferreteria.png') }}" alt="#" /> </div>
            </div>
            <h4 class="theme_color">Productos ferreteros</h4>
            <p>Distintos tipos de productos para su hogar, negocio u propósito</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->
  <!-- section -->
  <div class="section padding_layout_1 light_silver gross_layout">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="main_heading text_align_left">
              <h2>¿Por qué elegirnos?</h2>
              <p class="large"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4">
              <div class="full">
                <div class="service_blog_inner">
                  <div class="icon center"><img src="{{ asset('assets/images/it_service/si1.png') }}" alt="#" /></div>
                  <h4 class="service-heading center">Excelente atención</h4>
                  <p class="text-justify">Contará con la atención de nuestros vendores que gustosamente lo ayudaran con su inquietud.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="full">
                <div class="service_blog_inner">
                  <div class="icon center"><img src="{{ asset('assets/images/it_service/si2.png') }}" alt="#" /></div>
                  <h4 class="service-heading center">Pagos seguros</h4>
                  <p class="text-justify">Puede realizar su pago de la manera mas segura y confizable.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="full">
                <div class="service_blog_inner">
                  <div class="icon center"><img src="{{ asset('assets/images/it_service/si3.png') }}" alt="#" /></div>
                  <h4 class="service-heading center">Expertos en el tema</h4>
                  <p class="text-justify">Será atendido por un grupo de expertos especializados en el tema según sea su necesidad.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->
  <!-- section -->
  <div class="section padding_layout_1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="main_heading text_align_center">
              <h2>Oferta de productos</h2>
              <p class="large"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($Productos as $producto)
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all .bg-light">
              <div class="product_list .bg-light">
                <div class=".bg-light"> <img class="img-responsive" src="{{ asset("assets/images/Imagenes_productos/{$producto->fraccion}.png") }}" alt=""> </div>
                <div class="product_detail_btm">
                  <div class="center">
                    <h4><a href="it_shop_detail.html">{{$producto->nombre}}</a></h4>
                  </div>
                  <div class="product_price">
                    <p><span class="new_price"><a href="{{ route('contactenos') }}" class="btn main_bt center">Pedir</a></span></p>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- end section -->

  <!-- section -->
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="contact_us_section">
              <div class="call_icon"> <img src="{{ asset('assets/images/it_service/phone_icon.png') }}" alt="#" /> </div>
              <div class="inner_cont">
                <h2>¿Tienes inquietudes?</h2>
                <p>Responderemos todas sus preguntas.</p>
              </div>
              <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="{{ route('contactenos') }}">Contactenos</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->
@endsection