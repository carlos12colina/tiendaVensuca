<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>@yield('title')</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="{{ asset('assets/images/fevicon/fevicon.png') }}" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
<!-- Site css -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
<!-- responsive css -->
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
<!-- colors css -->
<link rel="stylesheet" href="{{ asset('assets/css/colors1.css') }}" />
<!-- custom css -->
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
<!-- wow Animation css -->
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}" />
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="{{ asset('assets/images/loaders/loader_1.png') }}" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top bg-success">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto: vensucarh2012@gmail.com">vensucarh2012@gmail.com</a></span></li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:gerenciavensuca@gmail.com">gerenciavensuca@gmail.com</a></span></li>
              </ul>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-right">
            <div class="make_appo"> <a class="btn white_btn" href="{{ route('cita') }}">Pedir cita</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="{{ route('inicio') }}"><img src="{{ asset('assets/images/logos/eslogan.png') }}" alt="logo" /></a> </div>
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
                    <li><a href="{{ route('productos') }}">Productos</a></li>
                  </ul>
                </li>
                <li> <a href="{{ route('contactenos') }}">Contactos</a></li>
              </ul>
            </div>
            @yield('busqueda')
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
@yield('content')

<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col- lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="{{route('buscar_productos')}}" method="post" id="search-global-form" class="search-global">
                @csrf
                <input type="text" placeholder="Qué desea buscar?" autocomplete="off" name="busqueda" id="search" value="" class="search-global__input" required>
                <button type="submit" class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Busque el producto que desea de manera fácil.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
<!-- footer -->
<footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
      <div class="footer_blog">
        <div class="row">          

        	<div class="col-md-6">
	            <div class="main-heading left_text">
	              <h2>Servicios</h2>
	            </div>
	            <ul class="footer-menu">
	              <li><a href="{{route('detalles_servicios')}}"><i class="fa fa-angle-right"></i> Ensablaje de mangueras</a></li>
	            </ul>
            </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Contactenos</h2>
            </div>
            <p>Calle Plaza con Calle Regeneración,<br>
              Puerto Cabello, Carabobo, Venezuela<br>
              <span style="font-size:18px;"><a>0242-3613776</a></span></p>
            <div class="footer_mail-section">
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
              <!-- descomentar si necesita usar la mensajeria rápida
              <form method="post" action="{{route('envioRapido')}}">
                @csrf
                <fieldset>
                <div class="field">
                  
                  <input placeholder="Enviar mensaje" name="message" type="text">
                  <button type="submit" class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                </div>
                </fieldset>
              </form>
              -->
            </div>
          </div>
        </div>
      </div>
      <div class="cprt">
        <p>VENSUCA © Copyrights 2021 Desarrollado por VENSUCA</p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
<!-- js section -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- menu js -->
<script src="{{ asset('assets/js/menumaker.js') }}"></script>
<!-- wow animation -->
<script src="{{ asset('assets/js/wow.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- revolution js files -->
<script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>

<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>

<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>

<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>

<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>

<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>

<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>

<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>

<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>


<!-- Core plugin JavaScript-->
<script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
</body>
</html>
