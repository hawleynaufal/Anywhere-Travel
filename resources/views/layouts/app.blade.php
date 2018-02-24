
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AnyWhere Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

  <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FREEHTML5.CO
        
    Website:        http://freehtml5.co/
    Email:          info@freehtml5.co
    Twitter:        http://twitter.com/fh5co
    Facebook:       https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
-->

<!-- Facebook and Twitter integration -->
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico">
<!--
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' 
    rel='stylesheet' type='text/css'> -->

    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{ asset('css/superfish.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css')}}">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{ asset('css/cs-select.css')}}">
    <link rel="stylesheet" href="{{ asset('css/cs-skin-border.css')}}">

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <style>
    ::selection {
        color: #fcfcfc;
        background: #2c9c7c;
    }
    label{
        font-weight: normal!important;;    
    }
</style>

<!-- Modernizr JS -->
<script src="{{ asset('js/modernizr-2.6.2.min.js')}}"></script>
<!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
<![endif]-->
@yield('css')
</head>
<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">

            <header id="fh5co-header-section" class="sticky-banner">
                <div class="container">
                    <div class="nav-header" style="padding-top: 20px;padding-bottom: 20px">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                        <img src="{{asset('images/logo-2.png')}}" height="50px" alt="" >
                        {{-- <h1 id="fh5co-logo" style="color:"><a href="{{url('/')}}" style="font-family: raleway;"><i class="icon-airplane"></i>AnyWhere Travel</a></h1> --}}
                        <!-- START #fh5co-menu-wrap -->
                        <nav id="fh5co-menu-wrap" role="navigation" style="margin: 0px!important;padding-top: -5px;">
                            <ul class="sf-menu" id="fh5co-primary-menu" style="">
                                <li class="active"><a href="{{url('/')}}">Home</a></li>

                                <li>
                                    @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="{{ url('/register') }}">Register</a></li>
                                    @else
                                    <li class="dropdown" >
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <div style="text-transform: capitalize;">
                                                {{ Auth::user()->name }} 
                                            </div>
                                        </a>
                                        
                                        <ul class="dropdown-menu" role="menu" >
                                            <li>
                                                <a href="{{ url('/logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>
</div>

@include('layouts.partials._alerts')
@yield('content')
@yield('js')
<script src="{{ asset('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('js/sticky.js')}}"></script>

<!-- Stellar -->
<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
<!-- Superfish -->
<script src="{{ asset('js/hoverIntent.js')}}"></script>
<script src="{{ asset('js/superfish.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/magnific-popup-options.js')}}"></script>
<!-- Date Picker -->
<script src="{{ asset('js/bootstrap-datepicker.min.js')}}"></script>
<!-- CS Select -->
<script src="{{ asset('js/classie.js')}}"></script>
<script src="{{ asset('js/selectFx.js')}}"></script>

<!-- Main JS -->
<script src="{{ asset('js/main.js')}}"></script>

</body>
</html>