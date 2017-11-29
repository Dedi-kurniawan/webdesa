<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Desa Sukajadi</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/bootstrap.css') }}" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/style.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/responsive.css') }}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/colors/color1.css') }}" id="colors">
    
    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/animate.css') }}">

    <!-- Favicon and touch icons  -->
    <link href="{{ asset('icon/apple-touch-icon-48-precomposed.png') }}" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="{{ asset('icon/apple-touch-icon-32-precomposed.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('icon/favicon.png') }}" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>                                 
<body class="header-sticky">   
    <div class="loader">
        <span class="loader1 block-loader"></span>
        <span class="loader2 block-loader"></span>
        <span class="loader3 block-loader"></span>
    </div>
    @include('layouts.aquarius.patrials.header')
    @yield('content')
    @include('layouts.aquarius.patrials.footer')
    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/bootstrap.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('javascript/jquery.easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/imagesloaded.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/owl.carousel.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('javascript/jquery-waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jquery.magnific-popup.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('javascript/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jquery.fitvids.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('javascript/jquery.mb.YTPlayer.js') }}"></script>   
    <script type="text/javascript" src="{{ asset('javascript/parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/switcher.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/smoothscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/main.js') }}"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{ asset('javascript/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/slider.js') }}"></script>
    @yield('scripts')
</body>
</html>